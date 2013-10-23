<?php

require_once('bootstrap.php');


$comment = new Symm\Wordpress\Entities\WpComments();
$comment->setCommentDate(new \DateTime());
$comment->setCommentDateGmt(new \DateTime());
$comment->setCommentAuthor('Gareth Jones');
$comment->setCommentContent('Hello World!');

$comment->setCommentPostId(1);

$em->persist($comment);
$em->flush();
