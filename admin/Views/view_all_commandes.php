Résultat de votre recherche :
<br />


<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Numéro de commande</th>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Auteur</th>
			<th>Raison sociale</th>
			<th>Date d'achat</th>
			<th>Prix d'achat</th>
			<th>nbr_exemplaires</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($commandes as $c): ?>
			<tr>
				<td>
					<?= $c->Id_commande ?>
				</td>
				<td>
					<?= $c->ISBN ?>
				</td>
				<td>
					<?= $c->Titre ?>
				</td>
				<td>
					<?= $c->Nom_auteur ?>
					<?= $c->Prenom_auteur ?>
				</td>
				<td>
					<?= $c->raison_sociale ?>
				</td>
				<td>
					<?= $c->date_achat ?>
				</td>
				<td>
					<?= $c->prix_achat ?>
				</td>
				<td>
					<?= $c->nbr_exemplaires ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>