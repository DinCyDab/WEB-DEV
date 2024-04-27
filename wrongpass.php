<div class="background-error-container" id="background-error-container" onclick="closeError()">
    <div class="error-container">
        <h4>ENTRY DENIED</h4>
        <p>click anywhere to close</p>
    </div>
</div>

<style>
    .background-error-container{
        z-index: 2;
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .3);
        cursor: pointer;
    }
    .error-container{
        position: relative;
        width: 200px;
        height: 100px;
        background-color: rgba(255, 255, 255, .9);
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: 25px;
        pointer-events: none;
    }
    .error-container h4{
        color: black;
        text-align: center;
        position: relative;
        top: 50%;
        transform: translate(0%, -50%);
        font-family: ChunkFive;
        letter-spacing: 2px;
    }
    .error-container p{
        text-decoration: underline;
        color: red;
        text-align: center;
        position: relative;
        top: 50%;
        transform: translate(0%, -50%);
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>

<script>
    var backgroundErrorContainer = document.getElementById("background-error-container");
    function closeError(){
        backgroundErrorContainer.style.display = "none";
    }
</script>