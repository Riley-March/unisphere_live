<?php

include 'vote.php';

if(removeVote((int)$_POST['POST_ID'], $_POST['USER'], "user")){
    echo 'Success';
} else {
    echo 'Failed';
}
