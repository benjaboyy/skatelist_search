
// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyC-JatjLtStNecUq8klTDY7rhu6mNJZ04c",
    authDomain: "skatelist-1476633145939.firebaseapp.com",
    databaseURL: "https://skatelist-1476633145939.firebaseio.com",
    projectId: "skatelist-1476633145939",
    storageBucket: "skatelist-1476633145939.appspot.com",
    messagingSenderId: "335193879923",
    appId: "1:335193879923:web:c9303169cc6244865c8106",
    measurementId: "G-Q8V28P89MG"
    };
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

const messaging = firebase.messaging();
messaging.requestPermission()
.then(function() {
    console.log('premission');
    return messaging.getToken();
})
.then(function(token) {
    console.log(token);
})
.catch(function(err) {
    console.log('error occured');
})

messaging.onMessage(function(payload){
    console.log('onMessage: ', payload);
})