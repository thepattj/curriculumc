<?php
	foreach ($pais->result() as $country){?>
		<ul>
			<li><?= $country->nombrePais; ?></li>
		</ul>		
	<?php } ?>

</body>
</html>