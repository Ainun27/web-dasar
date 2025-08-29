# Lab6Web
## Ainun Dwi Permana (312310013)

Tugas mengerjakan latihan pada module dua Pemrograman Web
       

#### jQuery Framework
##### jQuery Effects – Sliding

```ssh
<!DOCTYPE html>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
        });
    </script>
    <style type="text/css">
        #panel, #flip {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
        }
        #panel {
        padding: 50px;
        display: none;
        }
    </style>
</head>
<body>
    <div id="flip">Click to slide the panel down or up</div>
    <div id="panel">Hello world!</div>
</body>
</html>
```
![alt text](https://github.com/Ainun27/web-dasar/blob/master/Lab6Web/tugas6/1.png?raw=true)
![alt text](https://github.com/Ainun27/web-dasar/blob/master/Lab6Web/tugas6/2.png?raw=true)

##### jQuery Effects - Animation
- gambarnya kotak ijonya berubah-rubah

```ssh
<!DOCTYPE html>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("button").click(function(){   

            var div = $("div");
            div.animate({height: '300px', opacity: '0.4'}, "slow");
            div.animate({width: '300px', opacity: '0.8'}, "slow");
            div.animate({height:   
    '180px', opacity: '0.4'}, "slow");
            div.animate({width: '180px', opacity: '0.8'}, "slow");
        });
        });
    </script>
    <style>
        /* Tidak ada gaya CSS yang didefinisikan dalam kode ini */
    </style>
</head>
<body>
    <button>Start Animation</button>
    <div style="background: #98bf21; height:100px; width:100px; position:absolute;"></div>
</body>
</html>   
```

![alt text](https://github.com/Ainun27/web-dasar/blob/master/Lab6Web/tugas6/3.png?raw=true)
![alt text](https://github.com/Ainun27/web-dasar/blob/master/Lab6Web/tugas6/4.png?raw=true)

##### jQuery UI Draggable
- kotaknya bisa pindah-pindah, tapi tidak melewati garis

```ssh
<!DOCTYPE html>
<html>
<head>
    <title>Elemen yang Dapat Ditarik</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <style>
        #draggable {
            width: 125px;
            height: 125px;
            background-color: #FFF;
            text-align: center;
            padding: 1px 5px;
            border: 1px solid #AAA;
            margin: auto;
            float: left;
        }

        #containment-wrapper {
            width: 95%;
            height: 200px;
            border: 1px solid #4E4E4E;
            padding: 10px;
        }
    </style>
    <script>
        $(function() {
            $("#draggable").draggable({
                containment: "#containment-wrapper",
                scroll: false
            });
        });
    </script>
</head>
<body>
    <div id="containment-wrapper">
        <div id="draggable">
            <p>I'm contained within the box</p>
        </div>
    </div>
</body>
</html>
```
![alt text](https://github.com/Ainun27/web-dasar/blob/master/Lab6Web/tugas6/5.png?raw=true)
