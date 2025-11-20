<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach($students as $student): ?>
            <tr>
                <td>#<?=$student['id']?></td>
                <td><?=$student['name']?></td>
                <td><?=$student['surname']?></td>
                <td>
                    <button class="btn btn-primary btn-sm">Edytuj</button>
                    <button class="btn btn-danger btn-sm">Usuń</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Wszystkich uczniów: 1</td>
            <td>
                <a class="btn btn-success btn-sm" href="index.php?route=students&action=add">Dodaj ucznia</a>
            </td>
        </tr>
    </tfoot>
</table>
