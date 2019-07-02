<?php

function recuperarSenha($conexao,$email){
        $usuario = $conexao->prepare("select * from clientes where email ='$email'");
        $usuario->execute();
        $array = $usuario->fetch();
        if($email = $array[0]){
            $senha_nova= substr(md5(microtime()),1,rand(8,12));
            $array_novo = array($array['nome'], $senha_nova,  $array['endereco'],  $array['telefone']);
            echo '<pre>';
            var_dump($array_novo);
            //die;
            alterarUsuario($conexao, $array_novo, $email);     

            // instanciando a classe
                $mail = new PHPMailer();  
                
            //  opçao de idioma, setado como br	
                $mail->SetLanguage("br"); 

            // habilitando SMTP	
                $mail->IsSMTP(); 

            // enviando como HTML
                $mail->IsHTML(true); 
                
            // Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens	
                $mail->SMTPDebug = 0;  
                
            // habilitando autenticação	
                $mail->SMTPAuth = true;  
                
            // habilitando tranferêcia segura (obrigatório)	
                $mail->SMTPSecure = 'tls'; 


            // Configurações para utilização do SMTP do Gmail  

                $mail->Host = 'smtp.gmail.com';

                $mail->Port = 587; // Porta de envio de e-mails do Gmail

                $mail->Username = 'pet0e0health@gmail.com';

                $mail->Password = 'petehealth00';

                $mail->CharSet = "utf-8";

            // Remetente da mensagem

                $mail->SetFrom('pet0e0health@gmail.com');
                
            // Endereço de destino do email
                $mail->AddAddress($email); 

            // Assunto e Corpo do email

                $mail->Subject = "Recuperação de senha";

                $mail->Body = "Para definir uma nova senha <a href='http://localhost/pet-health/projeto_pet/alterarSenha.php?email=$email&senha=$senha_nova'>clique aqui</a>" ;

            // Enviando o email

                if(!$mail->Send())

                {

                    $message = "PhpMailer Gmail status: " . $mail->ErrorInfo;
                    echo $message;
                    die;

                } 
        }
    }