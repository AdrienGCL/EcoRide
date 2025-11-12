<?php

    function checkExistingUser(PDO $pdo, string $mail):BOOL
    {
        $query = $pdo -> prepare("SELECT * FROM utilisateur WHERE email = :email");
        $query->bindValue(':email', $mail, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if($user){
            var_dump($user);
            return true;
        }
        else {
            return false;
        }
    };

    function saveUserInformations(PDO $pdo, string $pseudo, string $mail, string $mdpregister, string $firstnameregister, string $nameregister, string $birthdateregister, string $adresseregister, string $phoneregister,):BOOL
    {
        try
        {
            $query = $pdo -> prepare("INSERT INTO utilisateur (nom, prenom, email, password, telephone, adresse, date_naissance, pseudo) 
                                    VALUES (:nom, :prenom, :email, :password, :telephone, :adresse, :date_naissance, :pseudo)");
            $query->bindValue(':nom', $nameregister, PDO::PARAM_STR);
            $query->bindValue(':prenom', $firstnameregister, PDO::PARAM_STR);
            $query->bindValue(':email', $mail, PDO::PARAM_STR);
            $password = password_hash($mdpregister, PASSWORD_DEFAULT);
            $query->bindValue(':password', $password, PDO::PARAM_STR);
            $query->bindValue(':telephone', $phoneregister, PDO::PARAM_STR);
            $query->bindValue(':adresse', $adresseregister, PDO::PARAM_STR);
            $query->bindValue(':date_naissance', $birthdateregister, PDO::PARAM_STR);
            $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $query->execute();

            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
        
    };