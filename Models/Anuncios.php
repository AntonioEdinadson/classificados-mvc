<?php

class Anuncios extends Model {

    public function getQuantidade() {

        $sql = "SELECT COUNT(*) as qtd FROM anuncios";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            return $sql['qtd'];

        } else {
            return 0;
        }
    }
}
