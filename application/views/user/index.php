</head>

<body>


    <div class="container">
    <h2 class="mt-4">Pilih Kandidat Ketua kelas 11</h2>
            <hr>
        <div class="content-container">
           
            <?php foreach($ketua_1 as $daftar): ?>
                <div class="card mr-3 border-0 shadow-sm" style="width: 18rem;">
            <div bg-img="<?= base_url();?>/assets/resources/kandidat/<?= $daftar['foto'];?>" class="card-img-top img" > </div>
            <div class="card-body">
                <h5 class="card-title"><?= $daftar['nama']; ?></h5>
                <p class="card-text"><?= $daftar['kelas'];?></p>

                <div id="collapse" style="display: none;">
                    <p ><?= $daftar['visi']?></p>
                </div>

            
                <a href="<?= base_url();?>user/detail_ketua_1/<?= $daftar['id']; ?>" class="btn btn-success">pilih</a>
            </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>



<style>
    body{
        background: #f0f8ff;
    }

    .content-container{
        margin-top: 70px;
        display: flex;
    }

    .img{
        width: 100%;
        height: 270px;
    }
    .card{
        position: relative;
        padding-bottom: 40px;
    }

    .btn{
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        bottom: 20px;
    }

    @media only screen and ( max-width : 768px){
        .content-container{
            display: flex;
            flex-direction: column;
            margin: auto;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .card{
            margin-top: 20px;
        }
    }
</style>

    <script>

        
        window.onload = function(){
            const render_image = () => {
                let image = document.querySelectorAll('.img');
                image.forEach( img => {
                    let bg_img = img.getAttribute('bg-img');
                    img.style.backgroundImage = `url('${bg_img}')`;
                    img.style.backgroundPosition = 'center center';
                    img.style.backgroundSize = 'cover';
                } )
            }

            render_image();
        }
    </script>

