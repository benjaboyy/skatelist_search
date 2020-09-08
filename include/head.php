<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="stylesheet" type="text/css" href="include/css/frame.css">
    <link rel="stylesheet" type="text/css" href="include/main.css">
    <link rel="stylesheet" type="text/css" href="include/css/nav_css.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="manifest" href="manifest.json">
    <!--[if lt IE 9]>
        <script>
            document.createElement('video');
        </script>
    <![endif]-->
    <meta charset="utf-8">
    <title>Skatelist</title>
    <script>
    // Check that service workers are supported
    if ('serviceWorker' in navigator) {
      // Use the window load event to keep the page load performant
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('service-worker.js');
      });
    }
    </script>  
    
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-messaging.js"></script>
    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-analytics.js"></script>
    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-firestore.js"></script>

</head>