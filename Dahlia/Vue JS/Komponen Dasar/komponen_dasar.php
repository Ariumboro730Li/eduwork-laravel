<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Belajar Vue js</title>

    
</head>
<body>
        <div id="app" v-if= status == 'tampilkan'">
  
         {{ message }}
  
    </div>

</body>
</html>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type = "text/javascript">
        var app = new Vue ({
            el:'#app',
            data: {
                message :'hellow world',
            user :[
                
            ]  
            }
        })
    </script> 

