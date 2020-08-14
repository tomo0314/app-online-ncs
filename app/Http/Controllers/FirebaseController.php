<?php
namespace App\Http\Controllers;

class FirebaseController extends Controller
{
//
public function index(){
    ///////
    var userId = firebase.auth().currentUser.uid;
    return firebase.database().ref('/users/' + userId).once('value').then(function(snapshot) {
      var username = (snapshot.val() && snapshot.val().username) || 'Anonymous';
      // ...
    });
}
?>
