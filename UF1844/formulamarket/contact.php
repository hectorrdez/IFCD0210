<?php session_start() ?>
<?php $title = "Contacto" ?>
<?php include_once('./resources/parts/head.php') ?>
<?php $_SESSION['last'] = 'contact.php'; ?>

<body>
    <?php include_once('./resources/parts/nav.php') ?>
    <main class="alone center">
       <div class="contact">
           <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d276.49463952427516!2d-0.49860858202152547!3d38.36796293702272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6236f021ad6dd3%3A0xbd27999a62c7e4ec!2sC.%20Virgen%20de%20las%20Virtudes%2C%2030%2C%2003009%20Alicante%20(Alacant)%2C%20Alicante!5e0!3m2!1ses!2ses!4v1649963333854!5m2!1ses!2ses" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <div class="survey">
                    <form method="POST">
                        <h2 class="form">Contacta con nosotros:</h2>
                        <hr>
                        <label for="name">Tu nombre<span class="red">*</span></label>
                        <div class="name">
                            <input type="text" name="name" id="name">
                        </div>
                        <label for="email">Tu correo<span class="red">*</span></label>
                        <div class="email">
                            <input type="email" name="email" id="email">
                        </div>
                        <label for="comments">Tu mensaje<span class="red">*</span></label>
                        <div class="comments">
                            <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Escribe tu menmsaje aqui..."></textarea>
                        </div>
                        <div class="buttons">
                            <input type="submit" value="Enviar"> <input type="reset" value="Limpiar">
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <?php include_once('./resources/parts/footer.php') ?>
</body>