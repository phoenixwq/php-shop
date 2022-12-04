<?php

class Shop
{

    public static function updateShop($general, $about, $contact)
    {
        $db = Db::getConnection();

        $sql = "UPDATE shop
            SET 
                general = :general, 
                about = :about, 
                contact =:contact
            WHERE id = 1";

        $result = $db->prepare($sql);
        $result->bindParam(':general', $general, PDO::PARAM_STR);
        $result->bindParam(':about', $about, PDO::PARAM_STR);
        $result->bindParam(':contact', $contact, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getShop()
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM shop WHERE id = 1';
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

}
