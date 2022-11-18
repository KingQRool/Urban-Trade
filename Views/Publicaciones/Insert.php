<head>
    <script src="../Public/Js/jquery-3.1.1.min.js"></script>
    <script scr="../Public/Js/semantic.js"></script>
    <link rel="stylesheet" href="../Public/Css/semantic.css">
    <link rel="icon" type="image/x-icon" href="../Public/img/logo.ico" />
    <script src="https://kit.fontawesome.com/357827b059.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="ui container">
    <div class="ui form">
        <h1>Insertar Publicacion</h1>
        <form action="PublicationsController.php" method="POST" enctype="multipart/form-data">
            <div class="four fields">
                <div class="field">
                    <input type="hidden" name="action" value="insert">
                    <label for="nombre">Nombre de la Publicacion</label>
                    <input type="text" name="nombre_p" placeholder="Nombre su Publicacion">
                </div>
                <div class="field">
                    <label for="">Informacíon De La Publicacion</label>
                    <input type="text" name="info_p" placeholder="Agrege Informacion Adicional">
                </div>
                <!-- <div class="field">
                    <label for="">Contraseña</label>
                    <input type="password" name="contrasenae">
                </div> -->
                <div class="field">
                    <label for="">Precios de la Publicacion</label>
                    <input type="number" name="precios_p" placeholder="Precios">
                </div>
                <div class="field">
                    <label for="">Ingrese Una Imagen De La Publicacion</label>
                    <input type="file" name="fotos_p" accept=".jpg,.png,.jpeg">
                </div>
            </div>

            <div class="five fields">
                <div class="field">
                </div>
                <div class="field">
                </div>
                <div class="field">
                    <button class="ui right labeled icon button">
                        <i class="right arrow icon"></i>Guardar
                    </button>
                </div>
                <div class="fiel">

                </div>
                <div class="fiel">

                </div>
            </div>
        </form>
    </div>
</div>
</body>