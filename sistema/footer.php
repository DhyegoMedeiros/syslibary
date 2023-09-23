rodape
<script src="../assets/js/sistema.js"></script>
        <script>// Obtém o elemento de link de saída pelo ID 'sair-link'
            var sairLink = document.getElementById('sair-link');
            // Adiciona um ouvinte de clique ao link de saída
            sairLink.addEventListener('click', function() {
                // Envia uma solicitação AJAX para '../config.php' com uma ação 'sair'
                $.ajax({
                    url: '../assets/config.php',
                    method: 'POST',
                    data: { action: 'sair' }, // Envia uma ação 'sair' como parte da solicitação
                    success: function(data) {
                        // Redireciona para a página em branco após o logout
                        window.location.href = '';
                    }
                });
            });
        </script>
    </body>
</html>