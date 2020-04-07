<div class="container">

    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="iframeDevis" src="" allowfullscreen></iframe>
    </div>
</div>
<script>
    $(document).ready(function(){
        
           $('#iframeDevis').attr('src','http://localhost/lutherie/pdf/'+localStorage.getItem("ref")+'.pdf' )
        });
</script>
				