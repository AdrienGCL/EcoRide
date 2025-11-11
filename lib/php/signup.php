<?php
    
    function saveUserInformations(PDO $pdo, string $pseudo, string $mail, string $mdpregister, string $firstnameregister, string $nameregister, string $birthdateregister, string $adresseregister, string $phoneregister,):string
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

            return "Félicitations, votre inscription est terminée. Vous pouvez à présent vous connecter !";
        }
        catch (Exception $e)
        {
            return "Une erreur s'est produite, merci de réessayer ultérieurement.";
        }
        
    }