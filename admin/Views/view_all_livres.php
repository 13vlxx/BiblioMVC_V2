Résultat de votre recherche :
<br />


<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Thème</th>
			<th>Nombre de page</th>
			<th>Format</th>
			<th>Auteur</th>
			<th>Editeur</th>
			<th>Année d'édition</th>
			<th>Prix</th>
			<th>Langue</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($livres as $l): ?>
			<tr>
				<td>
					<?= $l->ISBN ?>
				</td>
				<td>
					<?= $l->Titre ?>
				</td>
				<td>
					<?= $l->Theme ?>
				</td>
				<td>
					<?= $l->Nb_pages ?>
				</td>
				<td>
					<?= $l->Format ?>
				</td>
				<td>
					<?= $l->Nom_auteur ?>
					<?= $l->Prenom_auteur ?>
				</td>
				<td>
					<?= $l->Editeur ?>
				</td>
				<td>
					<?= $l->Annee_edition ?>
				</td>
				<td>
					<?= $l->Prix ?>
				</td>
				<td>
					<?= $l->Langue ?>
				</td>
				<td>
					<?= "<a href='?controller=livre&action=edit_livre&id=" . $l->Id . "'>📝</a>" ?>
				</td>
				<td>
					<?= "<a href='?controller=livre&action=delete_livre&id=" . $l->Id . "'>🗑️</a>" ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>