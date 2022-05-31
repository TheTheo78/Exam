<div class="body-modificationProduit" style="text-align: center">
    <form action="index.php/?uc=gererProduits&etatLog=ajout&id=<?= $produitInfo['PDT_id'] ?>">
        <img src="<?= $produitInfo['image'] ?>" alt=image />
        <br><br>
        <input class="input-command" name="description" style="margin-bottom: 20px" value="<?= $produitInfo['description'] ?>" placeholder="description">
        <input class="input-command" name="prix" style="margin-left: -4px;width: 48%; display: inline-block" placeholder="prix">
        <input class="input-command" name="image" style="margin-left: -4px;width: 48%; display: inline-block" placeholder="image">
        <select class="input-command" name="idCat" style="margin-left: -2    px;width: 48%; display: inline-block" placeholder="idCategorie">
            <option value="bon" <?= $produitInfo['idCategorie'] == 'bon' ? ' selected="selected"' : ''; ?>>bon</option>
            <option value="car" <?= $produitInfo['idCategorie'] == 'car' ? ' selected="selected"' : ''; ?>>car</option>
            <option value="cho" <?= $produitInfo['idCategorie'] == 'cho' ? ' selected="selected"' : ''; ?>>cho</option>
        </select>
        <input class="input-command" name="nutriscore" style="margin-left: -4px; width: 48%; display: inline-block" placeholder="nutriscore">
        <input type="submit" value="Ajouter" class="btn-ajoutProduit">
    </form>
</div>