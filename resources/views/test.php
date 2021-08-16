<!DOCTYPE html>
<html>
    <head>
        <title>TEST</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.0/vue.js"></script>
    </head>
    <body>
        <div id = "intro" style = "text-align:center;">
            <h1>{{ message }}</h1>
        </div>
        <script type = "text/javascript">
            var vue_det = new Vue({
                el: '#intro',
                data: {
                message: 'My first VueJS Task'
                }
            });
        </script>
    </body>
</html>