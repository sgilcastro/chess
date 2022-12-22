<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function loadContent($id_page) {
    if((!isset($id_page)) || $id_page=="") {
        $id_page="";
    }
    switch ($id_page) {
        case "":
            include 'inc/login.php';
            break;
        case "create":
            include 'inc/create.php';
            break; 
        case "listgames":
            include 'inc/listgames.php';
            break;
        case "index":
            include 'inc/index.php';
            break;            
        case "profile":
            include 'inc/profile.php';
            break;
        case "play":
            include 'inc/play.php';
            break;
        case "viewrank":
            include 'inc/viewrank.php';
            break;
        case "edit":
            include 'inc/edit.php';
            break;
        case "delete":
            include 'inc/delete.php';
            break;
        default:
            include 'inc/error404.php';
            break;
    }
}