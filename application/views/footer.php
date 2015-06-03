            <footer>
            	<p> <?= $this->session->userdata('usuario').'('.$this->session->userdata('perfil_name').')'; ?> &copy; Agenda-2014 - <?= date('d-m-Y H:i') ?> </p>
            </footer>
        </div>

		<script src="<?= base_url('js/jquery.js') ?>"></script>
    	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	</body>
</html>