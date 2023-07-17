<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>
</html>

<style>

    body{
        scroll-behavior: smooth;
    }

    #progress{
        background-color: rgb(0, 0, 0, 0.1);
        border: 4px solid #395AAD;
        position: fixed;
        bottom: 20px;
        right: 50px;
        height: 40px;
        width: 40px;
        font-size: 30px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

</style>

<script>
    const bnt = document.getElementById("progress");

    bnt.addEventListener("click", function(){
        window.scrollTo(0,0);
    });

    document.addEventListener('scroll', ocultar);
    
    function ocultar(){
        if(window.scrollY > 1000 || window.scrollY < 300){
            bnt.style.display = "none";
        } else {
            bnt.style.display = "grid";
        }
    }

</script>