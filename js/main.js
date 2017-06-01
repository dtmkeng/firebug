console.log("Hello");
//authFirebase
(function(){
    var config = {
    apiKey: "AIzaSyBnIYXmksrjd0c7V2XwQ1DfsYTRFjrPBh4",
    authDomain: "showdata-27f44.firebaseapp.com",
    databaseURL: "https://showdata-27f44.firebaseio.com",
    projectId: "showdata-27f44",
    storageBucket: "showdata-27f44.appspot.com",
    messagingSenderId: "856643618548"
  };
  firebase.initializeApp(config);

  const head = document.getElementById('head');
  const object = firebase.database().ref();
  const childSelete = object.child('text');
  childSelete.on('value', snap => {
	     var data = JSON.stringify(snap.val());
	     head.innerHTML = data.replace(/^"(.*)"$/, '$1');
		 console.log(snap.val());
		 //console.log(snap.key);
	});

}());
// ref to push 
/*
var massege={
    text:"Robot club",
    projectNumber:1
};
parload['massege/'+massegeKey]=massege;
parload['long/'+massegeKey]=massege;

//console.log(massege);
//console.log(massegeKey);

//update  insert
//push  json 
//set clrea on clea
ref.update(parload);
var logRef = ref.child('long');
logRef.orderByKey().limitToLast(1).on('child_added',function(snap){
  console.log('added  '+snap.val());
});
logRef.on('child_removed',function(snap){
  console.log('removed  '+ snap.val());
});
ref.child('long').on('child_changed',function(snap){
  console.log('changed  '+snap.val());
});
//query 

ref.once('value')
.then(function(snap){
  console.log(snap.key ,"\n\n");
  console.log(snap.ref.toString(), "\n\n");
  console.log(snap.val() ,"\n\n");
});*/


