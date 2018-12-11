<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<meta charset="utf-8">
		<title>Acceuil</title>
	</head>
	<body>
	<header>
		<nav data-aos="fade-down">
			<img src="assets/image/backgrounds/background.jpg" alt="">
			<a class="actif" href="index.php">Accueil</a>
			<a href="forum.php">Forum</a>
			<a href="loginpage.php">Se connecter</a>
			<a href="registerpage.php">S'inscrire</a>
			<a href="membre.php">Page membre</a>
      <a href="topic.php">Les topics</a>
		</nav>
	</header>
  <?php
  //On prend tout ce qu'on a sur les topics normaux du forum


  $query=$db->prepare('SELECT forum_topic.topic_id, topic_titre, topic_createur, topic_vu, topic_post, topic_time, topic_last_post,
  Mb.membre_pseudo AS membre_pseudo_createur, post_id, post_createur, post_time, Ma.membre_pseudo AS membre_pseudo_last_posteur FROM forum_topic
  LEFT JOIN forum_membres Mb ON Mb.membre_id = forum_topic.topic_createur
  LEFT JOIN forum_post ON forum_topic.topic_last_post = forum_post.post_id
  LEFT JOIN forum_membres Ma ON Ma.membre_id = forum_post.post_createur
  WHERE topic_genre <> "Annonce" AND forum_topic.forum_id = :forum
  ORDER BY topic_last_post DESC
  LIMIT :premier ,:nombre');
  $query->bindValue(':forum',$forum,PDO::PARAM_INT);
  $query->bindValue(':premier',(int) $premierMessageAafficher,PDO::PARAM_INT);
  $query->bindValue(':nombre',(int) $nombreDeMessagesParPage,PDO::PARAM_INT);
  $query->execute();

  if ($query->rowCount()>0)
  {
  ?>
          <table>
          <tr>
          <th><img src="./images/message.gif" alt="Message" /></th>
          <th class="titre"><strong>Titre</strong></th>
          <th class="nombremessages"><strong>Réponses</strong></th>
          <th class="nombrevu"><strong>Vus</strong></th>
          <th class="auteur"><strong>Auteur</strong></th>
          <th class="derniermessage"><strong>Dernier message  </strong></th>
          </tr>
          <?php
          //On lance la boucle

          while ($data = $query->fetch())
          {
                  //Ah bah tiens... re vla l'echo de fou
                  echo'<tr><td><img src="./images/message.gif" alt="Message" /></td>

                  <td class="titre">
                  <strong><a href="./voirtopic.php?t='.$data['topic_id'].'"
                  title="Topic commencé à
                  '.date('H\hi \l\e d M,y',$data['topic_time']).'">
                  '.stripslashes(htmlspecialchars($data['topic_titre'])).'</a></strong></td>

                  <td class="nombremessages">'.$data['topic_post'].'</td>

                  <td class="nombrevu">'.$data['topic_vu'].'</td>

                  <td><a href="./voirprofil.php?m='.$data['topic_createur'].'
                  &amp;action=consulter">
                  '.stripslashes(htmlspecialchars($data['membre_pseudo_createur'])).'</a></td>';

                 	//Selection dernier message
  		$nombreDeMessagesParPage = 15;
  		$nbr_post = $data['topic_post'] +1;
  		$page = ceil($nbr_post / $nombreDeMessagesParPage);

                  echo '<td class="derniermessage">Par
                  <a href="./voirprofil.php?m='.$data['post_createur'].'
                  &amp;action=consulter">
                  '.stripslashes(htmlspecialchars($data['membre_pseudo_last_posteur'])).'</a><br />
                  A <a href="./voirtopic.php?t='.$data['topic_id'].'&amp;page='.$page.'#p_'.$data['post_id'].'">'.date('H\hi \l\e d M y',$data['post_time']).'</a></td></tr>';

          }
          ?>
          </table>
          <?php
  }
  else //S'il n'y a pas de message
  {
          echo'<p>Ce forum ne contient aucun sujet actuellement</p>';
  }
  $query->CloseCursor();
  ?>
  </div>
  </body></html>
