<?php
return [
  'auth' => [
    'login' => [
      'success' => ['code'=>1001,'http_status'=>200,'message'=>['en'=>'Login successful','fr'=>'Connexion réussie'],'type'=>'success'],
      'invalid_credentials' => ['code'=>1002,'http_status'=>401,'message'=>['en'=>'Invalid credentials','fr'=>'Identifiants invalides'],'type'=>'error'],
      'account_locked' => ['code'=>1003,'http_status'=>403,'message'=>['en'=>'Account locked','fr'=>'Compte verrouillé'],'type'=>'error'],
      'account_inactive' => ['code'=>1004,'http_status'=>403,'message'=>['en'=>'Account inactive','fr'=>'Compte inactif'],'type'=>'error'],
      'too_many_attempts' => ['code'=>1005,'http_status'=>429,'message'=>['en'=>'Too many login attempts','fr'=>'Trop de tentatives de connexion'],'type'=>'error'],
      'two_factor_required' => ['code'=>1006,'http_status'=>401,'message'=>['en'=>'Two-factor authentication required','fr'=>'Authentification à deux facteurs requise'],'type'=>'error'],
      'session_expired' => ['code'=>1007,'http_status'=>401,'message'=>['en'=>'Session expired','fr'=>'Session expirée'],'type'=>'error'],
      'invalid_token' => ['code'=>1008,'http_status'=>401,'message'=>['en'=>'Invalid authentication token','fr'=>'Jeton d\'authentification invalide'],'type'=>'error'],
      'suspended' => ['code'=>1009,'http_status'=>403,'message'=>['en'=>'Account suspended','fr'=>'Compte suspendu'],'type'=>'error'],
      'banned' => ['code'=>1010,'http_status'=>403,'message'=>['en'=>'Account banned','fr'=>'Compte banni'],'type'=>'error'],
    ],
    'register' => [
      'success' => ['code'=>1011,'http_status'=>201,'message'=>['en'=>'Account created','fr'=>'Compte créé'],'type'=>'success'],
      'email_exists' => ['code'=>1012,'http_status'=>409,'message'=>['en'=>'Email already registered','fr'=>'Email déjà enregistré'],'type'=>'error'],
      'weak_password' => ['code'=>1013,'http_status'=>422,'message'=>['en'=>'Password too weak','fr'=>'Mot de passe trop faible'],'type'=>'error'],
      'invalid_data' => ['code'=>1014,'http_status'=>422,'message'=>['en'=>'Invalid registration data','fr'=>'Données d\'inscription invalides'],'type'=>'error'],
      'username_taken' => ['code'=>1015,'http_status'=>409,'message'=>['en'=>'Username already taken','fr'=>'Nom d\'utilisateur déjà pris'],'type'=>'error'],
      'invalid_invite' => ['code'=>1016,'http_status'=>400,'message'=>['en'=>'Invalid invitation code','fr'=>'Code d\'invitation invalide'],'type'=>'error'],
      'registration_disabled' => ['code'=>1017,'http_status'=>403,'message'=>['en'=>'Registration is disabled','fr'=>'Inscription désactivée'],'type'=>'error'],
      'age_restricted' => ['code'=>1018,'http_status'=>403,'message'=>['en'=>'Age restriction applies','fr'=>'Restriction d\'âge appliquée'],'type'=>'error'],
    ],
    'logout' => [
      'success' => ['code'=>1019,'http_status'=>200,'message'=>['en'=>'Logout successful','fr'=>'Déconnexion réussie'],'type'=>'success'],
      'not_logged_in' => ['code'=>1020,'http_status'=>401,'message'=>['en'=>'Not logged in','fr'=>'Non connecté'],'type'=>'error'],
    ],
    'password_reset' => [
      'request_success' => ['code'=>1021,'http_status'=>200,'message'=>['en'=>'Password reset email sent','fr'=>'Email de réinitialisation envoyé'],'type'=>'success'],
      'invalid_email' => ['code'=>1022,'http_status'=>400,'message'=>['en'=>'Email not found','fr'=>'Email non trouvé'],'type'=>'error'],
      'invalid_token' => ['code'=>1023,'http_status'=>400,'message'=>['en'=>'Invalid reset token','fr'=>'Jeton de réinitialisation invalide'],'type'=>'error'],
      'expired_token' => ['code'=>1024,'http_status'=>400,'message'=>['en'=>'Reset token expired','fr'=>'Jeton de réinitialisation expiré'],'type'=>'error'],
      'reset_success' => ['code'=>1025,'http_status'=>200,'message'=>['en'=>'Password reset successful','fr'=>'Réinitialisation du mot de passe réussie'],'type'=>'success'],
      'same_password' => ['code'=>1026,'http_status'=>400,'message'=>['en'=>'New password cannot be the same','fr'=>'Nouveau mot de passe ne peut être identique'],'type'=>'error'],
    ],
    'two_factor' => [
      'enabled' => ['code'=>1027,'http_status'=>200,'message'=>['en'=>'Two-factor authentication enabled','fr'=>'Authentification à deux facteurs activée'],'type'=>'success'],
      'disabled' => ['code'=>1028,'http_status'=>200,'message'=>['en'=>'Two-factor authentication disabled','fr'=>'Authentification à deux facteurs désactivée'],'type'=>'success'],
      'invalid_code' => ['code'=>1029,'http_status'=>401,'message'=>['en'=>'Invalid 2FA code','fr'=>'Code 2FA invalide'],'type'=>'error'],
    ],
  ],
  'user' => [
    'create' => [
      'success' => ['code'=>1030,'http_status'=>201,'message'=>['en'=>'User created','fr'=>'Utilisateur créé'],'type'=>'success'],
      'duplicate' => ['code'=>1031,'http_status'=>409,'message'=>['en'=>'User already exists','fr'=>'Utilisateur déjà existant'],'type'=>'error'],
      'invalid_role' => ['code'=>1032,'http_status'=>400,'message'=>['en'=>'Invalid role assigned','fr'=>'Rôle invalide attribué'],'type'=>'error'],
    ],
    'update' => [
      'success' => ['code'=>1033,'http_status'=>200,'message'=>['en'=>'User updated','fr'=>'Utilisateur mis à jour'],'type'=>'success'],
      'not_found' => ['code'=>1034,'http_status'=>404,'message'=>['en'=>'User not found','fr'=>'Utilisateur non trouvé'],'type'=>'error'],
      'no_changes' => ['code'=>1035,'http_status'=>400,'message'=>['en'=>'No changes provided','fr'=>'Aucun changement fourni'],'type'=>'error'],
      'email_taken' => ['code'=>1036,'http_status'=>409,'message'=>['en'=>'Email already in use','fr'=>'Email déjà utilisé'],'type'=>'error'],
      'invalid_data' => ['code'=>1037,'http_status'=>422,'message'=>['en'=>'Invalid user data','fr'=>'Données utilisateur invalides'],'type'=>'error'],
    ],
    'delete' => [
      'success' => ['code'=>1038,'http_status'=>200,'message'=>['en'=>'User deleted','fr'=>'Utilisateur supprimé'],'type'=>'success'],
      'not_found' => ['code'=>1039,'http_status'=>404,'message'=>['en'=>'User not found','fr'=>'Utilisateur non trouvé'],'type'=>'error'],
      'cannot_delete_self' => ['code'=>1040,'http_status'=>403,'message'=>['en'=>'Cannot delete self','fr'=>'Impossible de se supprimer soi-même'],'type'=>'error'],
    ],
    'deactivate' => [
      'success' => ['code'=>1041,'http_status'=>200,'message'=>['en'=>'User deactivated','fr'=>'Utilisateur désactivé'],'type'=>'success'],
      'already_deactivated' => ['code'=>1042,'http_status'=>400,'message'=>['en'=>'User already deactivated','fr'=>'Utilisateur déjà désactivé'],'type'=>'error'],
      'not_found' => ['code'=>1043,'http_status'=>404,'message'=>['en'=>'User not found','fr'=>'Utilisateur non trouvé'],'type'=>'error'],
    ],
    'reactivate' => [
      'success' => ['code'=>1044,'http_status'=>200,'message'=>['en'=>'User reactivated','fr'=>'Utilisateur réactivé'],'type'=>'success'],
      'already_active' => ['code'=>1045,'http_status'=>400,'message'=>['en'=>'User already active','fr'=>'Utilisateur déjà actif'],'type'=>'error'],
    ],
    'role' => [
      'updated' => ['code'=>1046,'http_status'=>200,'message'=>['en'=>'User role updated','fr'=>'Rôle utilisateur mis à jour'],'type'=>'success'],
      'invalid_role' => ['code'=>1047,'http_status'=>400,'message'=>['en'=>'Invalid role','fr'=>'Rôle invalide'],'type'=>'error'],
    ],
  ],
  'cart' => [
    'add' => [
      'success' => ['code'=>1048,'http_status'=>200,'message'=>['en'=>'Item added to cart','fr'=>'Article ajouté au panier'],'type'=>'success'],
      'out_of_stock' => ['code'=>1049,'http_status'=>400,'message'=>['en'=>'Item out of stock','fr'=>'Article en rupture de stock'],'type'=>'error'],
      'invalid_item' => ['code'=>1050,'http_status'=>400,'message'=>['en'=>'Invalid item','fr'=>'Article invalide'],'type'=>'error'],
      'quantity_exceeded' => ['code'=>1051,'http_status'=>400,'message'=>['en'=>'Quantity exceeds limit','fr'=>'Quantité dépasse la limite'],'type'=>'error'],
      'not_available' => ['code'=>1052,'http_status'=>400,'message'=>['en'=>'Item not available','fr'=>'Article non disponible'],'type'=>'error'],
    ],
    'remove' => [
      'success' => ['code'=>1053,'http_status'=>200,'message'=>['en'=>'Item removed from cart','fr'=>'Article retiré du panier'],'type'=>'success'],
      'not_found' => ['code'=>1054,'http_status'=>404,'message'=>['en'=>'Item not in cart','fr'=>'Article non présent dans le panier'],'type'=>'error'],
    ],
    'update' => [
      'success' => ['code'=>1055,'http_status'=>200,'message'=>['en'=>'Cart updated','fr'=>'Panier mis à jour'],'type'=>'success'],
      'invalid_quantity' => ['code'=>1056,'http_status'=>400,'message'=>['en'=>'Invalid quantity','fr'=>'Quantité invalide'],'type'=>'error'],
    ],
    'checkout' => [
      'success' => ['code'=>1057,'http_status'=>200,'message'=>['en'=>'Checkout initiated','fr'=>'Paiement initié'],'type'=>'success'],
      'empty_cart' => ['code'=>1058,'http_status'=>400,'message'=>['en'=>'Cart is empty','fr'=>'Panier vide'],'type'=>'error'],
      'address_missing' => ['code'=>1059,'http_status'=>400,'message'=>['en'=>'Shipping address missing','fr'=>'Adresse de livraison manquante'],'type'=>'error'],
    ],
    'empty' => [
      'success' => ['code'=>1060,'http_status'=>200,'message'=>['en'=>'Cart emptied','fr'=>'Panier vidé'],'type'=>'success'],
      'already_empty' => ['code'=>1061,'http_status'=>400,'message'=>['en'=>'Cart already empty','fr'=>'Panier déjà vide'],'type'=>'error'],
    ],
    'coupon' => [
      'applied' => ['code'=>1062,'http_status'=>200,'message'=>['en'=>'Coupon applied','fr'=>'Coupon appliqué'],'type'=>'success'],
      'invalid_coupon' => ['code'=>1063,'http_status'=>400,'message'=>['en'=>'Invalid coupon','fr'=>'Coupon invalide'],'type'=>'error'],
      'expired_coupon' => ['code'=>1064,'http_status'=>400,'message'=>['en'=>'Coupon expired','fr'=>'Coupon expiré'],'type'=>'error'],
    ],
  ],
  'order' => [
    'place' => [
      'success' => ['code'=>1065,'http_status'=>201,'message'=>['en'=>'Order placed','fr'=>'Commande passée'],'type'=>'success'],
      'insufficient_stock' => ['code'=>1066,'http_status'=>400,'message'=>['en'=>'Insufficient stock','fr'=>'Stock insuffisant'],'type'=>'error'],
      'payment_required' => ['code'=>1067,'http_status'=>400,'message'=>['en'=>'Payment required','fr'=>'Paiement requis'],'type'=>'error'],
      'invalid_address' => ['code'=>1068,'http_status'=>400,'message'=>['en'=>'Invalid shipping address','fr'=>'Adresse de livraison invalide'],'type'=>'error'],
    ],
    'cancel' => [
      'success' => ['code'=>1069,'http_status'=>200,'message'=>['en'=>'Order canceled','fr'=>'Commande annulée'],'type'=>'success'],
      'not_found' => ['code'=>1070,'http_status'=>404,'message'=>['en'=>'Order not found','fr'=>'Commande non trouvée'],'type'=>'error'],
      'cannot_cancel' => ['code'=>1071,'http_status'=>400,'message'=>['en'=>'Order cannot be canceled','fr'=>'Commande non annulable'],'type'=>'error'],
    ],
    'refund' => [
      'success' => ['code'=>1072,'http_status'=>200,'message'=>['en'=>'Refund processed','fr'=>'Remboursement traité'],'type'=>'success'],
      'not_eligible' => ['code'=>1073,'http_status'=>400,'message'=>['en'=>'Order not eligible for refund','fr'=>'Commande non remboursable'],'type'=>'error'],
      'already_refunded' => ['code'=>1074,'http_status'=>400,'message'=>['en'=>'Order already refunded','fr'=>'Commande déjà remboursée'],'type'=>'error'],
    ],
    'ship' => [
      'success' => ['code'=>1075,'http_status'=>200,'message'=>['en'=>'Order shipped','fr'=>'Commande expédiée'],'type'=>'success'],
      'not_ready' => ['code'=>1076,'http_status'=>400,'message'=>['en'=>'Order not ready for shipping','fr'=>'Commande non prête pour l\'expédition'],'type'=>'error'],
      'partially_shipped' => ['code'=>1077,'http_status'=>200,'message'=>['en'=>'Order partially shipped','fr'=>'Commande partiellement expédiée'],'type'=>'success'],
      'tracking_added' => ['code'=>1078,'http_status'=>200,'message'=>['en'=>'Tracking information added','fr'=>'Informations de suivi ajoutées'],'type'=>'success'],
    ],
    'status' => [
      'updated' => ['code'=>1079,'http_status'=>200,'message'=>['en'=>'Order status updated','fr'=>'Statut de la commande mis à jour'],'type'=>'success'],
      'invalid_status' => ['code'=>1080,'http_status'=>400,'message'=>['en'=>'Invalid status','fr'=>'Statut invalide'],'type'=>'error'],
    ],
    'backorder' => [
      'success' => ['code'=>1081,'http_status'=>200,'message'=>['en'=>'Order placed on backorder','fr'=>'Commande mise en attente'],'type'=>'success'],
      'not_available' => ['code'=>1082,'http_status'=>400,'message'=>['en'=>'Item not available for backorder','fr'=>'Article non disponible pour commande en attente'],'type'=>'error'],
    ],
  ],
  'payment' => [
    'process' => [
      'success' => ['code'=>1083,'http_status'=>200,'message'=>['en'=>'Payment processed','fr'=>'Paiement traité'],'type'=>'success'],
      'declined' => ['code'=>1084,'http_status'=>400,'message'=>['en'=>'Payment declined','fr'=>'Paiement refusé'],'type'=>'error'],
      'invalid_card' => ['code'=>1085,'http_status'=>400,'message'=>['en'=>'Invalid card details','fr'=>'Détails de carte invalides'],'type'=>'error'],
      'insufficient_funds' => ['code'=>1086,'http_status'=>400,'message'=>['en'=>'Insufficient funds','fr'=>'Fonds insuffisants'],'type'=>'error'],
      'expired_card' => ['code'=>1087,'http_status'=>400,'message'=>['en'=>'Card expired','fr'=>'Carte expirée'],'type'=>'error'],
    ],
    'refund' => [
      'success' => ['code'=>1088,'http_status'=>200,'message'=>['en'=>'Refund successful','fr'=>'Remboursement réussi'],'type'=>'success'],
      'failed' => ['code'=>1089,'http_status'=>500,'message'=>['en'=>'Refund failed','fr'=>'Remboursement échoué'],'type'=>'error'],
      'not_eligible' => ['code'=>1090,'http_status'=>400,'message'=>['en'=>'Payment not eligible for refund','fr'=>'Paiement non remboursable'],'type'=>'error'],
    ],
    'method' => [
      'added' => ['code'=>1091,'http_status'=>200,'message'=>['en'=>'Payment method added','fr'=>'Moyen de paiement ajouté'],'type'=>'success'],
      'removed' => ['code'=>1092,'http_status'=>200,'message'=>['en'=>'Payment method removed','fr'=>'Moyen de paiement supprimé'],'type'=>'success'],
      'invalid_method' => ['code'=>1093,'http_status'=>400,'message'=>['en'=>'Invalid payment method','fr'=>'Moyen de paiement invalide'],'type'=>'error'],
    ],
    'verify' => [
      'success' => ['code'=>1094,'http_status'=>200,'message'=>['en'=>'Payment method verified','fr'=>'Moyen de paiement vérifié'],'type'=>'success'],
      'failed' => ['code'=>1095,'http_status'=>400,'message'=>['en'=>'Payment verification failed','fr'=>'Vérification du paiement échouée'],'type'=>'error'],
    ],
  ],
  'profile' => [
    'update' => [
      'success' => ['code'=>1096,'http_status'=>200,'message'=>['en'=>'Profile updated','fr'=>'Profil mis à jour'],'type'=>'success'],
      'invalid_data' => ['code'=>1097,'http_status'=>422,'message'=>['en'=>'Invalid profile data','fr'=>'Données de profil invalides'],'type'=>'error'],
      'no_changes' => ['code'=>1098,'http_status'=>400,'message'=>['en'=>'No profile changes provided','fr'=>'Aucun changement de profil fourni'],'type'=>'error'],
    ],
    'avatar' => [
      'upload_success' => ['code'=>1099,'http_status'=>200,'message'=>['en'=>'Avatar uploaded','fr'=>'Avatar téléchargé'],'type'=>'success'],
      'invalid_format' => ['code'=>1100,'http_status'=>400,'message'=>['en'=>'Invalid avatar format','fr'=>'Format d\'avatar invalide'],'type'=>'error'],
      'too_large' => ['code'=>1101,'http_status'=>400,'message'=>['en'=>'Avatar file too large','fr'=>'Fichier d\'avatar trop volumineux'],'type'=>'error'],
      'upload_failed' => ['code'=>1102,'http_status'=>500,'message'=>['en'=>'Avatar upload failed','fr'=>'Échec du téléchargement de l\'avatar'],'type'=>'error'],
    ],
    'settings' => [
      'updated' => ['code'=>1103,'http_status'=>200,'message'=>['en'=>'Profile settings updated','fr'=>'Paramètres de profil mis à jour'],'type'=>'success'],
      'invalid_setting' => ['code'=>1104,'http_status'=>400,'message'=>['en'=>'Invalid profile setting','fr'=>'Paramètre de profil invalide'],'type'=>'error'],
    ],
    'address' => [
      'added' => ['code'=>1105,'http_status'=>200,'message'=>['en'=>'Address added','fr'=>'Adresse ajoutée'],'type'=>'success'],
      'updated' => ['code'=>1106,'http_status'=>200,'message'=>['en'=>'Address updated','fr'=>'Adresse mise à jour'],'type'=>'success'],
      'deleted' => ['code'=>1107,'http_status'=>200,'message'=>['en'=>'Address deleted','fr'=>'Adresse supprimée'],'type'=>'success'],
      'invalid_address' => ['code'=>1108,'http_status'=>400,'message'=>['en'=>'Invalid address','fr'=>'Adresse invalide'],'type'=>'error'],
    ],
    'privacy' => [
      'updated' => ['code'=>1109,'http_status'=>200,'message'=>['en'=>'Privacy settings updated','fr'=>'Paramètres de confidentialité mis à jour'],'type'=>'success'],
      'invalid_option' => ['code'=>1110,'http_status'=>400,'message'=>['en'=>'Invalid privacy option','fr'=>'Option de confidentialité invalide'],'type'=>'error'],
    ],
  ],
  'system' => [
    'error' => [
      'generic' => ['code'=>1111,'http_status'=>500,'message'=>['en'=>'Internal server error','fr'=>'Erreur interne du serveur'],'type'=>'error'],
      'database' => ['code'=>1112,'http_status'=>500,'message'=>['en'=>'Database error','fr'=>'Erreur de base de données'],'type'=>'error'],
      'connection' => ['code'=>1113,'http_status'=>500,'message'=>['en'=>'Connection error','fr'=>'Erreur de connexion'],'type'=>'error'],
      'timeout' => ['code'=>1114,'http_status'=>504,'message'=>['en'=>'Server timeout','fr'=>'Délai d\'attente du serveur dépassé'],'type'=>'error'],
    ],
    'maintenance' => [
      'scheduled' => ['code'=>1115,'http_status'=>503,'message'=>['en'=>'System under maintenance','fr'=>'Système en maintenance'],'type'=>'info'],
      'unscheduled' => ['code'=>1116,'http_status'=>503,'message'=>['en'=>'Unexpected maintenance','fr'=>'Maintenance imprévue'],'type'=>'warning'],
      'completed' => ['code'=>1117,'http_status'=>200,'message'=>['en'=>'Maintenance completed','fr'=>'Maintenance terminée'],'type'=>'success'],
    ],
    'unavailable' => [
      'service' => ['code'=>1118,'http_status'=>503,'message'=>['en'=>'Service unavailable','fr'=>'Service indisponible'],'type'=>'error'],
      'feature' => ['code'=>1119,'http_status'=>503,'message'=>['en'=>'Feature temporarily unavailable','fr'=>'Fonctionnalité temporairement indisponible'],'type'=>'error'],
    ],
    'config' => [
      'updated' => ['code'=>1120,'http_status'=>200,'message'=>['en'=>'System configuration updated','fr'=>'Configuration système mise à jour'],'type'=>'success'],
      'invalid' => ['code'=>1121,'http_status'=>400,'message'=>['en'=>'Invalid configuration','fr'=>'Configuration invalide'],'type'=>'error'],
    ],
  ],
  'validation' => [
    'missing_field' => [
      'generic' => ['code'=>1122,'http_status'=>422,'message'=>['en'=>'Missing required field','fr'=>'Champ requis manquant'],'type'=>'error'],
      'email' => ['code'=>1123,'http_status'=>422,'message'=>['en'=>'Email is required','fr'=>'Email requis'],'type'=>'error'],
      'password' => ['code'=>1124,'http_status'=>422,'message'=>['en'=>'Password is required','fr'=>'Mot de passe requis'],'type'=>'error'],
      'name' => ['code'=>1125,'http_status'=>422,'message'=>['en'=>'Name is required','fr'=>'Nom requis'],'type'=>'error'],
      'phone' => ['code'=>1126,'http_status'=>422,'message'=>['en'=>'Phone number is required','fr'=>'Numéro de téléphone requis'],'type'=>'error'],
      'address' => ['code'=>1127,'http_status'=>422,'message'=>['en'=>'Address is required','fr'=>'Adresse requise'],'type'=>'error'],
    ],
    'invalid_format' => [
      'email' => ['code'=>1128,'http_status'=>422,'message'=>['en'=>'Invalid email format','fr'=>'Format d\'email invalide'],'type'=>'error'],
      'phone' => ['code'=>1129,'http_status'=>422,'message'=>['en'=>'Invalid phone number format','fr'=>'Format de numéro de téléphone invalide'],'type'=>'error'],
      'date' => ['code'=>1130,'http_status'=>422,'message'=>['en'=>'Invalid date format','fr'=>'Format de date invalide'],'type'=>'error'],
      'url' => ['code'=>1131,'http_status'=>422,'message'=>['en'=>'Invalid URL format','fr'=>'Format d\'URL invalide'],'type'=>'error'],
    ],
    'invalid_value' => [
      'generic' => ['code'=>1132,'http_status'=>422,'message'=>['en'=>'Invalid input value','fr'=>'Valeur d\'entrée invalide'],'type'=>'error'],
      'numeric' => ['code'=>1133,'http_status'=>422,'message'=>['en'=>'Value must be numeric','fr'=>'La valeur doit être numérique'],'type'=>'error'],
      'positive' => ['code'=>1134,'http_status'=>422,'message'=>['en'=>'Value must be positive','fr'=>'La valeur doit être positive'],'type'=>'error'],
    ],
    'length' => [
      'too_short' => ['code'=>1135,'http_status'=>422,'message'=>['en'=>'Input too short','fr'=>'Entrée trop courte'],'type'=>'error'],
      'too_long' => ['code'=>1136,'http_status'=>422,'message'=>['en'=>'Input too long','fr'=>'Entrée trop longue'],'type'=>'error'],
    ],
    'unique' => [
      'email' => ['code'=>1137,'http_status'=>422,'message'=>['en'=>'Email must be unique','fr'=>'Email doit être unique'],'type'=>'error'],
      'username' => ['code'=>1138,'http_status'=>422,'message'=>['en'=>'Username must be unique','fr'=>'Nom d\'utilisateur doit être unique'],'type'=>'error'],
    ],
  ],
  'notification' => [
    'send' => [
      'success' => ['code'=>1139,'http_status'=>200,'message'=>['en'=>'Notification sent','fr'=>'Notification envoyée'],'type'=>'success'],
      'failed' => ['code'=>1140,'http_status'=>500,'message'=>['en'=>'Notification failed','fr'=>'Échec de l\'envoi de la notification'],'type'=>'error'],
      'invalid_recipient' => ['code'=>1141,'http_status'=>400,'message'=>['en'=>'Invalid recipient','fr'=>'Destinataire invalide'],'type'=>'error'],
    ],
    'read' => [
      'success' => ['code'=>1142,'http_status'=>200,'message'=>['en'=>'Notification marked as read','fr'=>'Notification marquée comme lue'],'type'=>'success'],
      'not_found' => ['code'=>1143,'http_status'=>404,'message'=>['en'=>'Notification not found','fr'=>'Notification non trouvée'],'type'=>'error'],
    ],
    'delete' => [
      'success' => ['code'=>1144,'http_status'=>200,'message'=>['en'=>'Notification deleted','fr'=>'Notification supprimée'],'type'=>'success'],
      'not_found' => ['code'=>1145,'http_status'=>404,'message'=>['en'=>'Notification not found','fr'=>'Notification non trouvée'],'type'=>'error'],
    ],
    'settings' => [
      'updated' => ['code'=>1146,'http_status'=>200,'message'=>['en'=>'Notification settings updated','fr'=>'Paramètres de notification mis à jour'],'type'=>'success'],
      'invalid' => ['code'=>1147,'http_status'=>400,'message'=>['en'=>'Invalid notification settings','fr'=>'Paramètres de notification invalides'],'type'=>'error'],
    ],
  ],
  'upload' => [
    'file' => [
      'success' => ['code'=>1148,'http_status'=>200,'message'=>['en'=>'File uploaded','fr'=>'Fichier téléchargé'],'type'=>'success'],
      'too_large' => ['code'=>1149,'http_status'=>400,'message'=>['en'=>'File too large','fr'=>'Fichier trop volumineux'],'type'=>'error'],
      'invalid_type' => ['code'=>1150,'http_status'=>400,'message'=>['en'=>'Invalid file type','fr'=>'Type de fichier invalide'],'type'=>'error'],
      'failed' => ['code'=>1151,'http_status'=>500,'message'=>['en'=>'File upload failed','fr'=>'Échec du téléchargement du fichier'],'type'=>'error'],
      'limit_exceeded' => ['code'=>1152,'http_status'=>400,'message'=>['en'=>'Upload limit exceeded','fr'=>'Limite de téléchargement dépassée'],'type'=>'error'],
    ],
    'image' => [
      'success' => ['code'=>1153,'http_status'=>200,'message'=>['en'=>'Image uploaded','fr'=>'Image téléchargée'],'type'=>'success'],
      'invalid_resolution' => ['code'=>1154,'http_status'=>400,'message'=>['en'=>'Invalid image resolution','fr'=>'Résolution d\'image invalide'],'type'=>'error'],
      'corrupted' => ['code'=>1155,'http_status'=>400,'message'=>['en'=>'Corrupted image file','fr'=>'Fichier image corrompu'],'type'=>'error'],
    ],
    'document' => [
      'success' => ['code'=>1156,'http_status'=>200,'message'=>['en'=>'Document uploaded','fr'=>'Document téléchargé'],'type'=>'success'],
      'invalid_format' => ['code'=>1157,'http_status'=>400,'message'=>['en'=>'Invalid document format','fr'=>'Format de document invalide'],'type'=>'error'],
    ],
  ],
  'chat' => [
    'message' => [
      'sent' => ['code'=>1158,'http_status'=>200,'message'=>['en'=>'Message sent','fr'=>'Message envoyé'],'type'=>'success'],
      'failed' => ['code'=>1159,'http_status'=>500,'message'=>['en'=>'Message delivery failed','fr'=>'Échec de l\'envoi du message'],'type'=>'error'],
      'recipient_not_found' => ['code'=>1160,'http_status'=>404,'message'=>['en'=>'Recipient not found','fr'=>'Destinataire non trouvé'],'type'=>'error'],
      'blocked' => ['code'=>1161,'http_status'=>403,'message'=>['en'=>'Recipient has blocked you','fr'=>'Destinataire vous a bloqué'],'type'=>'error'],
    ],
    'group' => [
      'created' => ['code'=>1162,'http_status'=>201,'message'=>['en'=>'Group chat created','fr'=>'Chat de groupe créé'],'type'=>'success'],
      'not_found' => ['code'=>1163,'http_status'=>404,'message'=>['en'=>'Group not found','fr'=>'Groupe non trouvé'],'type'=>'error'],
      'member_added' => ['code'=>1164,'http_status'=>200,'message'=>['en'=>'Member added to group','fr'=>'Membre ajouté au groupe'],'type'=>'success'],
      'member_removed' => ['code'=>1165,'http_status'=>200,'message'=>['en'=>'Member removed from group','fr'=>'Membre retiré du groupe'],'type'=>'success'],
    ],
    'settings' => [
      'updated' => ['code'=>1166,'http_status'=>200,'message'=>['en'=>'Chat settings updated','fr'=>'Paramètres de chat mis à jour'],'type'=>'success'],
      'invalid' => ['code'=>1167,'http_status'=>400,'message'=>['en'=>'Invalid chat settings','fr'=>'Paramètres de chat invalides'],'type'=>'error'],
    ],
  ],
  'admin' => [
    'user' => [
      'ban_success' => ['code'=>1168,'http_status'=>200,'message'=>['en'=>'User banned','fr'=>'Utilisateur banni'],'type'=>'success'],
      'ban_failed' => ['code'=>1169,'http_status'=>500,'message'=>['en'=>'Failed to ban user','fr'=>'Échec du bannissement de l\'utilisateur'],'type'=>'error'],
      'unban_success' => ['code'=>1170,'http_status'=>200,'message'=>['en'=>'User unbanned','fr'=>'Utilisateur débanni'],'type'=>'success'],
      'role_assigned' => ['code'=>1171,'http_status'=>200,'message'=>['en'=>'Role assigned to user','fr'=>'Rôle attribué à l\'utilisateur'],'type'=>'success'],
      'role_revoked' => ['code'=>1172,'http_status'=>200,'message'=>['en'=>'Role revoked from user','fr'=>'Rôle retiré de l\'utilisateur'],'type'=>'success'],
    ],
    'settings' => [
      'updated' => ['code'=>1173,'http_status'=>200,'message'=>['en'=>'System settings updated','fr'=>'Paramètres système mis à jour'],'type'=>'success'],
      'invalid' => ['code'=>1174,'http_status'=>400,'message'=>['en'=>'Invalid system settings','fr'=>'Paramètres système invalides'],'type'=>'error'],
    ],
    'content' => [
      'approved' => ['code'=>1175,'http_status'=>200,'message'=>['en'=>'Content approved','fr'=>'Contenu approuvé'],'type'=>'success'],
      'rejected' => ['code'=>1176,'http_status'=>200,'message'=>['en'=>'Content rejected','fr'=>'Contenu rejeté'],'type'=>'success'],
      'flagged' => ['code'=>1177,'http_status'=>200,'message'=>['en'=>'Content flagged for review','fr'=>'Contenu signalé pour examen'],'type'=>'info'],
    ],
    'logs' => [
      'accessed' => ['code'=>1178,'http_status'=>200,'message'=>['en'=>'Logs accessed','fr'=>'Journaux consultés'],'type'=>'success'],
      'not_found' => ['code'=>1179,'http_status'=>404,'message'=>['en'=>'Logs not found','fr'=>'Journaux non trouvés'],'type'=>'error'],
    ],
  ],
  'search' => [
    'query' => [
      'success' => ['code'=>1180,'http_status'=>200,'message'=>['en'=>'Search completed','fr'=>'Recherche terminée'],'type'=>'success'],
      'no_results' => ['code'=>1181,'http_status'=>404,'message'=>['en'=>'No results found','fr'=>'Aucun résultat trouvé'],'type'=>'info'],
      'invalid_query' => ['code'=>1182,'http_status'=>400,'message'=>['en'=>'Invalid search query','fr'=>'Requête de recherche invalide'],'type'=>'error'],
      'too_short' => ['code'=>1183,'http_status'=>400,'message'=>['en'=>'Search query too short','fr'=>'Requête de recherche trop courte'],'type'=>'error'],
    ],
    'filters' => [
      'applied' => ['code'=>1184,'http_status'=>200,'message'=>['en'=>'Search filters applied','fr'=>'Filtres de recherche appliqués'],'type'=>'success'],
      'invalid' => ['code'=>1185,'http_status'=>400,'message'=>['en'=>'Invalid search filters','fr'=>'Filtres de recherche invalides'],'type'=>'error'],
    ],
    'history' => [
      'saved' => ['code'=>1186,'http_status'=>200,'message'=>['en'=>'Search history saved','fr'=>'Historique de recherche sauvegardé'],'type'=>'success'],
      'cleared' => ['code'=>1187,'http_status'=>200,'message'=>['en'=>'Search history cleared','fr'=>'Historique de recherche effacé'],'type'=>'success'],
    ],
  ],
  'subscription' => [
    'subscribe' => [
      'success' => ['code'=>1188,'http_status'=>201,'message'=>['en'=>'Subscription created','fr'=>'Abonnement créé'],'type'=>'success'],
      'already_subscribed' => ['code'=>1189,'http_status'=>409,'message'=>['en'=>'Already subscribed','fr'=>'Déjà abonné'],'type'=>'error'],
      'invalid_plan' => ['code'=>1190,'http_status'=>400,'message'=>['en'=>'Invalid subscription plan','fr'=>'Plan d\'abonnement invalide'],'type'=>'error'],
    ],
    'cancel' => [
      'success' => ['code'=>1191,'http_status'=>200,'message'=>['en'=>'Subscription canceled','fr'=>'Abonnement annulé'],'type'=>'success'],
      'not_found' => ['code'=>1192,'http_status'=>404,'message'=>['en'=>'Subscription not found','fr'=>'Abonnement non trouvé'],'type'=>'error'],
    ],
    'renew' => [
      'success' => ['code'=>1193,'http_status'=>200,'message'=>['en'=>'Subscription renewed','fr'=>'Abonnement renouvelé'],'type'=>'success'],
      'failed' => ['code'=>1194,'http_status'=>400,'message'=>['en'=>'Subscription renewal failed','fr'=>'Échec du renouvellement de l\'abonnement'],'type'=>'error'],
    ],
    'upgrade' => [
      'success' => ['code'=>1195,'http_status'=>200,'message'=>['en'=>'Subscription upgraded','fr'=>'Abonnement mis à niveau'],'type'=>'success'],
      'invalid_plan' => ['code'=>1196,'http_status'=>400,'message'=>['en'=>'Invalid upgrade plan','fr'=>'Plan de mise à niveau invalide'],'type'=>'error'],
    ],
    'downgrade' => [
      'success' => ['code'=>1197,'http_status'=>200,'message'=>['en'=>'Subscription downgraded','fr'=>'Abonnement rétrogradé'],'type'=>'success'],
      'invalid_plan' => ['code'=>1198,'http_status'=>400,'message'=>['en'=>'Invalid downgrade plan','fr'=>'Plan de rétrogradation invalide'],'type'=>'error'],
    ],
  ],
  'wishlist' => [
    'add' => [
      'success' => ['code'=>1199,'http_status'=>200,'message'=>['en'=>'Item added to wishlist','fr'=>'Article ajouté à la liste de souhaits'],'type'=>'success'],
      'already_added' => ['code'=>1200,'http_status'=>400,'message'=>['en'=>'Item already in wishlist','fr'=>'Article déjà dans la liste de souhaits'],'type'=>'error'],
      'invalid_item' => ['code'=>1201,'http_status'=>400,'message'=>['en'=>'Invalid item','fr'=>'Article invalide'],'type'=>'error'],
    ],
    'remove' => [
      'success' => ['code'=>1202,'http_status'=>200,'message'=>['en'=>'Item removed from wishlist','fr'=>'Article retiré de la liste de souhaits'],'type'=>'success'],
      'not_found' => ['code'=>1203,'http_status'=>404,'message'=>['en'=>'Item not in wishlist','fr'=>'Article non présent dans la liste de souhaits'],'type'=>'error'],
    ],
    'clear' => [
      'success' => ['code'=>1204,'http_status'=>200,'message'=>['en'=>'Wishlist cleared','fr'=>'Liste de souhaits vidée'],'type'=>'success'],
      'already_empty' => ['code'=>1205,'http_status'=>400,'message'=>['en'=>'Wishlist already empty','fr'=>'Liste de souhaits déjà vide'],'type'=>'error'],
    ],
  ],
  'review' => [
    'submit' => [
      'success' => ['code'=>1206,'http_status'=>201,'message'=>['en'=>'Review submitted','fr'=>'Avis soumis'],'type'=>'success'],
      'not_purchased' => ['code'=>1207,'http_status'=>403,'message'=>['en'=>'Item not purchased','fr'=>'Article non acheté'],'type'=>'error'],
      'invalid_rating' => ['code'=>1208,'http_status'=>400,'message'=>['en'=>'Invalid rating','fr'=>'Évaluation invalide'],'type'=>'error'],
    ],
    'update' => [
      'success' => ['code'=>1209,'http_status'=>200,'message'=>['en'=>'Review updated','fr'=>'Avis mis à jour'],'type'=>'success'],
      'not_found' => ['code'=>1210,'http_status'=>404,'message'=>['en'=>'Review not found','fr'=>'Avis non trouvé'],'type'=>'error'],
    ],
    'delete' => [
      'success' => ['code'=>1211,'http_status'=>200,'message'=>['en'=>'Review deleted','fr'=>'Avis supprimé'],'type'=>'success'],
      'not_found' => ['code'=>1212,'http_status'=>404,'message'=>['en'=>'Review not found','fr'=>'Avis non trouvé'],'type'=>'error'],
    ],
    'flag' => [
      'success' => ['code'=>1213,'http_status'=>200,'message'=>['en'=>'Review flagged','fr'=>'Avis signalé'],'type'=>'success'],
      'already_flagged' => ['code'=>1214,'http_status'=>400,'message'=>['en'=>'Review already flagged','fr'=>'Avis déjà signalé'],'type'=>'error'],
    ],
  ],
  'analytics' => [
    'report' => [
      'generated' => ['code'=>1215,'http_status'=>200,'message'=>['en'=>'Report generated','fr'=>'Rapport généré'],'type'=>'success'],
      'failed' => ['code'=>1216,'http_status'=>500,'message'=>['en'=>'Report generation failed','fr'=>'Échec de la génération du rapport'],'type'=>'error'],
      'invalid_date_range' => ['code'=>1217,'http_status'=>400,'message'=>['en'=>'Invalid date range','fr'=>'Plage de dates invalide'],'type'=>'error'],
    ],
    'dashboard' => [
      'accessed' => ['code'=>1218,'http_status'=>200,'message'=>['en'=>'Dashboard accessed','fr'=>'Tableau de bord consulté'],'type'=>'success'],
      'no_data' => ['code'=>1219,'http_status'=>404,'message'=>['en'=>'No analytics data available','fr'=>'Aucune donnée analytique disponible'],'type'=>'info'],
    ],
    'export' => [
      'success' => ['code'=>1220,'http_status'=>200,'message'=>['en'=>'Analytics exported','fr'=>'Analytiques exportées'],'type'=>'success'],
      'failed' => ['code'=>1221,'http_status'=>500,'message'=>['en'=>'Export failed','fr'=>'Échec de l\'exportation'],'type'=>'error'],
    ],
  ],
  'email' => [
    'send' => [
      'success' => ['code'=>1222,'http_status'=>200,'message'=>['en'=>'Email sent','fr'=>'Email envoyé'],'type'=>'success'],
      'failed' => ['code'=>1223,'http_status'=>500,'message'=>['en'=>'Email sending failed','fr'=>'Échec de l\'envoi de l\'email'],'type'=>'error'],
      'invalid_recipient' => ['code'=>1224,'http_status'=>400,'message'=>['en'=>'Invalid email recipient','fr'=>'Destinataire email invalide'],'type'=>'error'],
    ],
    'template' => [
      'created' => ['code'=>1225,'http_status'=>201,'message'=>['en'=>'Email template created','fr'=>'Modèle d\'email créé'],'type'=>'success'],
      'updated' => ['code'=>1226,'http_status'=>200,'message'=>['en'=>'Email template updated','fr'=>'Modèle d\'email mis à jour'],'type'=>'success'],
      'not_found' => ['code'=>1227,'http_status'=>404,'message'=>['en'=>'Email template not found','fr'=>'Modèle d\'email non trouvé'],'type'=>'error'],
    ],
    'settings' => [
      'updated' => ['code'=>1228,'http_status'=>200,'message'=>['en'=>'Email settings updated','fr'=>'Paramètres email mis à jour'],'type'=>'success'],
      'invalid' => ['code'=>1229,'http_status'=>400,'message'=>['en'=>'Invalid email settings','fr'=>'Paramètres email invalides'],'type'=>'error'],
    ],
  ],
  'security' => [
    'session' => [
      'terminated' => ['code'=>1230,'http_status'=>200,'message'=>['en'=>'Session terminated','fr'=>'Session terminée'],'type'=>'success'],
      'not_found' => ['code'=>1231,'http_status'=>404,'message'=>['en'=>'Session not found','fr'=>'Session non trouvée'],'type'=>'error'],
    ],
    'ip' => [
      'blocked' => ['code'=>1232,'http_status'=>200,'message'=>['en'=>'IP address blocked','fr'=>'Adresse IP bloquée'],'type'=>'success'],
      'unblocked' => ['code'=>1233,'http_status'=>200,'message'=>['en'=>'IP address unblocked','fr'=>'Adresse IP débloquée'],'type'=>'success'],
      'suspicious' => ['code'=>1234,'http_status'=>403,'message'=>['en'=>'Suspicious activity detected','fr'=>'Activité suspecte détectée'],'type'=>'warning'],
    ],
    'access' => [
      'denied' => ['code'=>1235,'http_status'=>403,'message'=>['en'=>'Access denied','fr'=>'Accès refusé'],'type'=>'error'],
      'granted' => ['code'=>1236,'http_status'=>200,'message'=>['en'=>'Access granted','fr'=>'Accès accordé'],'type'=>'success'],
    ],
    'token' => [
      'revoked' => ['code'=>1237,'http_status'=>200,'message'=>['en'=>'Token revoked','fr'=>'Jeton révoqué'],'type'=>'success'],
      'invalid' => ['code'=>1238,'http_status'=>401,'message'=>['en'=>'Invalid token','fr'=>'Jeton invalide'],'type'=>'error'],
    ],
  ],
  'content' => [
    'create' => [
      'success' => ['code'=>1239,'http_status'=>201,'message'=>['en'=>'Content created','fr'=>'Contenu créé'],'type'=>'success'],
      'invalid' => ['code'=>1240,'http_status'=>400,'message'=>['en'=>'Invalid content','fr'=>'Contenu invalide'],'type'=>'error'],
    ],
    'update' => [
      'success' => ['code'=>1241,'http_status'=>200,'message'=>['en'=>'Content updated','fr'=>'Contenu mis à jour'],'type'=>'success'],
      'not_found' => ['code'=>1242,'http_status'=>404,'message'=>['en'=>'Content not found','fr'=>'Contenu non trouvé'],'type'=>'error'],
    ],
    'delete' => [
      'success' => ['code'=>1243,'http_status'=>200,'message'=>['en'=>'Content deleted','fr'=>'Contenu supprimé'],'type'=>'success'],
      'not_found' => ['code'=>1244,'http_status'=>404,'message'=>['en'=>'Content not found','fr'=>'Contenu non trouvé'],'type'=>'error'],
    ],
    'publish' => [
      'success' => ['code'=>1245,'http_status'=>200,'message'=>['en'=>'Content published','fr'=>'Contenu publié'],'type'=>'success'],
      'failed' => ['code'=>1246,'http_status'=>500,'message'=>['en'=>'Content publication failed','fr'=>'Échec de la publication du contenu'],'type'=>'error'],
    ],
    'archive' => [
      'success' => ['code'=>1247,'http_status'=>200,'message'=>['en'=>'Content archived','fr'=>'Contenu archivé'],'type'=>'success'],
      'not_found' => ['code'=>1248,'http_status'=>404,'message'=>['en'=>'Content not found','fr'=>'Contenu non trouvé'],'type'=>'error'],
    ],
  ],
  'inventory' => [
    'add' => [
      'success' => ['code'=>1249,'http_status'=>201,'message'=>['en'=>'Item added to inventory','fr'=>'Article ajouté à l\'inventaire'],'type'=>'success'],
      'duplicate' => ['code'=>1250,'http_status'=>409,'message'=>['en'=>'Item already in inventory','fr'=>'Article déjà dans l\'inventaire'],'type'=>'error'],
    ],
    'update' => [
      'success' => ['code'=>1251,'http_status'=>200,'message'=>['en'=>'Inventory updated','fr'=>'Inventaire mis à jour'],'type'=>'success'],
      'not_found' => ['code'=>1252,'http_status'=>404,'message'=>['en'=>'Item not found in inventory','fr'=>'Article non trouvé dans l\'inventaire'],'type'=>'error'],
    ],
    'remove' => [
      'success' => ['code'=>1253,'http_status'=>200,'message'=>['en'=>'Item removed from inventory','fr'=>'Article retiré de l\'inventaire'],'type'=>'success'],
      'not_found' => ['code'=>1254,'http_status'=>404,'message'=>['en'=>'Item not found in inventory','fr'=>'Article non trouvé dans l\'inventaire'],'type'=>'error'],
    ],
    'stock' => [
      'low' => ['code'=>1255,'http_status'=>200,'message'=>['en'=>'Low stock warning','fr'=>'Avertissement de stock faible'],'type'=>'warning'],
      'out' => ['code'=>1256,'http_status'=>400,'message'=>['en'=>'Item out of stock','fr'=>'Article en rupture de stock'],'type'=>'error'],
    ],
  ],
  'coupon' => [
    'create' => [
      'success' => ['code'=>1257,'http_status'=>201,'message'=>['en'=>'Coupon created','fr'=>'Coupon créé'],'type'=>'success'],
      'invalid' => ['code'=>1258,'http_status'=>400,'message'=>['en'=>'Invalid coupon details','fr'=>'Détails du coupon invalides'],'type'=>'error'],
    ],
    'apply' => [
      'success' => ['code'=>1259,'http_status'=>200,'message'=>['en'=>'Coupon applied','fr'=>'Coupon appliqué'],'type'=>'success'],
      'invalid' => ['code'=>1260,'http_status'=>400,'message'=>['en'=>'Invalid coupon','fr'=>'Coupon invalide'],'type'=>'error'],
      'expired' => ['code'=>1261,'http_status'=>400,'message'=>['en'=>'Coupon expired','fr'=>'Coupon expiré'],'type'=>'error'],
      'not_applicable' => ['code'=>1262,'http_status'=>400,'message'=>['en'=>'Coupon not applicable','fr'=>'Coupon non applicable'],'type'=>'error'],
    ],
    'delete' => [
      'success' => ['code'=>1263,'http_status'=>200,'message'=>['en'=>'Coupon deleted','fr'=>'Coupon supprimé'],'type'=>'success'],
      'not_found' => ['code'=>1264,'http_status'=>404,'message'=>['en'=>'Coupon not found','fr'=>'Coupon non trouvé'],'type'=>'error'],
    ],
  ],
  'support' => [
    'ticket' => [
      'created' => ['code'=>1265,'http_status'=>201,'message'=>['en'=>'Support ticket created','fr'=>'Ticket de support créé'],'type'=>'success'],
      'not_found' => ['code'=>1266,'http_status'=>404,'message'=>['en'=>'Ticket not found','fr'=>'Ticket non trouvé'],'type'=>'error'],
      'closed' => ['code'=>1267,'http_status'=>200,'message'=>['en'=>'Ticket closed','fr'=>'Ticket fermé'],'type'=>'success'],
    ],
    'response' => [
      'added' => ['code'=>1268,'http_status'=>200,'message'=>['en'=>'Response added to ticket','fr'=>'Réponse ajoutée au ticket'],'type'=>'success'],
      'failed' => ['code'=>1269,'http_status'=>500,'message'=>['en'=>'Failed to add response','fr'=>'Échec de l\'ajout de la réponse'],'type'=>'error'],
    ],
    'escalate' => [
      'success' => ['code'=>1270,'http_status'=>200,'message'=>['en'=>'Ticket escalated','fr'=>'Ticket escaladé'],'type'=>'success'],
      'already_escalated' => ['code'=>1271,'http_status'=>400,'message'=>['en'=>'Ticket already escalated','fr'=>'Ticket déjà escaladé'],'type'=>'error'],
    ],
  ],
  'api' => [
    'request' => [
      'success' => ['code'=>1272,'http_status'=>200,'message'=>['en'=>'API request successful','fr'=>'Requête API réussie'],'type'=>'success'],
      'invalid' => ['code'=>1273,'http_status'=>400,'message'=>['en'=>'Invalid API request','fr'=>'Requête API invalide'],'type'=>'error'],
      'rate_limit' => ['code'=>1274,'http_status'=>429,'message'=>['en'=>'API rate limit exceeded','fr'=>'Limite de taux API dépassée'],'type'=>'error'],
    ],
    'key' => [
      'generated' => ['code'=>1275,'http_status'=>200,'message'=>['en'=>'API key generated','fr'=>'Clé API générée'],'type'=>'success'],
      'revoked' => ['code'=>1276,'http_status'=>200,'message'=>['en'=>'API key revoked','fr'=>'Clé API révoquée'],'type'=>'success'],
      'invalid' => ['code'=>1277,'http_status'=>401,'message'=>['en'=>'Invalid API key','fr'=>'Clé API invalide'],'type'=>'error'],
    ],
    'endpoint' => [
      'not_found' => ['code'=>1278,'http_status'=>404,'message'=>['en'=>'API endpoint not found','fr'=>'Point de terminaison API non trouvé'],'type'=>'error'],
      'deprecated' => ['code'=>1279,'http_status'=>410,'message'=>['en'=>'API endpoint deprecated','fr'=>'Point de terminaison API obsolète'],'type'=>'warning'],
    ],
  ],
  'promotion' => [
    'create' => [
      'success' => ['code'=>1280,'http_status'=>201,'message'=>['en'=>'Promotion created','fr'=>'Promotion créée'],'type'=>'success'],
      'invalid' => ['code'=>1281,'http_status'=>400,'message'=>['en'=>'Invalid promotion details','fr'=>'Détails de promotion invalides'],'type'=>'error'],
    ],
    'apply' => [
      'success' => ['code'=>1282,'http_status'=>200,'message'=>['en'=>'Promotion applied','fr'=>'Promotion appliquée'],'type'=>'success'],
      'not_eligible' => ['code'=>1283,'http_status'=>400,'message'=>['en'=>'Not eligible for promotion','fr'=>'Non éligible à la promotion'],'type'=>'error'],
      'expired' => ['code'=>1284,'http_status'=>400,'message'=>['en'=>'Promotion expired','fr'=>'Promotion expirée'],'type'=>'error'],
    ],
    'delete' => [
      'success' => ['code'=>1285,'http_status'=>200,'message'=>['en'=>'Promotion deleted','fr'=>'Promotion supprimée'],'type'=>'success'],
      'not_found' => ['code'=>1286,'http_status'=>404,'message'=>['en'=>'Promotion not found','fr'=>'Promotion non trouvée'],'type'=>'error'],
    ],
  ],
  'feedback' => [
    'submit' => [
      'success' => ['code'=>1287,'http_status'=>201,'message'=>['en'=>'Feedback submitted','fr'=>'Commentaire soumis'],'type'=>'success'],
      'invalid' => ['code'=>1288,'http_status'=>400,'message'=>['en'=>'Invalid feedback','fr'=>'Commentaire invalide'],'type'=>'error'],
    ],
    'review' => [
      'success' => ['code'=>1289,'http_status'=>200,'message'=>['en'=>'Feedback reviewed','fr'=>'Commentaire examiné'],'type'=>'success'],
      'not_found' => ['code'=>1290,'http_status'=>404,'message'=>['en'=>'Feedback not found','fr'=>'Commentaire non trouvé'],'type'=>'error'],
    ],
  ],
  'billing' => [
    'invoice' => [
      'generated' => ['code'=>1291,'http_status'=>200,'message'=>['en'=>'Invoice generated','fr'=>'Facture générée'],'type'=>'success'],
      'not_found' => ['code'=>1292,'http_status'=>404,'message'=>['en'=>'Invoice not found','fr'=>'Facture non trouvée'],'type'=>'error'],
      'sent' => ['code'=>1293,'http_status'=>200,'message'=>['en'=>'Invoice sent','fr'=>'Facture envoyée'],'type'=>'success'],
    ],
    'payment' => [
      'success' => ['code'=>1294,'http_status'=>200,'message'=>['en'=>'Invoice payment successful','fr'=>'Paiement de la facture réussi'],'type'=>'success'],
      'failed' => ['code'=>1295,'http_status'=>400,'message'=>['en'=>'Invoice payment failed','fr'=>'Échec du paiement de la facture'],'type'=>'error'],
    ],
    'history' => [
      'accessed' => ['code'=>1296,'http_status'=>200,'message'=>['en'=>'Billing history accessed','fr'=>'Historique de facturation consulté'],'type'=>'success'],
      'no_data' => ['code'=>1297,'http_status'=>404,'message'=>['en'=>'No billing history available','fr'=>'Aucun historique de facturation disponible'],'type'=>'info'],
    ],
  ],
  'referral' => [
    'create' => [
      'success' => ['code'=>1298,'http_status'=>201,'message'=>['en'=>'Referral created','fr'=>'Parrainage créé'],'type'=>'success'],
      'invalid' => ['code'=>1299,'http_status'=>400,'message'=>['en'=>'Invalid referral code','fr'=>'Code de parrainage invalide'],'type'=>'error'],
    ],
    'redeem' => [
      'success' => ['code'=>1300,'http_status'=>200,'message'=>['en'=>'Referral redeemed','fr'=>'Parrainage utilisé'],'type'=>'success'],
      'expired' => ['code'=>1301,'http_status'=>400,'message'=>['en'=>'Referral code expired','fr'=>'Code de parrainage expiré'],'type'=>'error'],
    ],
  ],
  'event' => [
    'create' => [
      'success' => ['code'=>1302,'http_status'=>201,'message'=>['en'=>'Event created','fr'=>'Événement créé'],'type'=>'success'],
      'invalid' => ['code'=>1303,'http_status'=>400,'message'=>['en'=>'Invalid event details','fr'=>'Détails de l\'événement invalides'],'type'=>'error'],
    ],
    'register' => [
      'success' => ['code'=>1304,'http_status'=>200,'message'=>['en'=>'Registered for event','fr'=>'Inscrit à l\'événement'],'type'=>'success'],
      'full' => ['code'=>1305,'http_status'=>400,'message'=>['en'=>'Event is full','fr'=>'Événement complet'],'type'=>'error'],
    ],
    'cancel' => [
      'success' => ['code'=>1306,'http_status'=>200,'message'=>['en'=>'Event registration canceled','fr'=>'Inscription à l\'événement annulée'],'type'=>'success'],
      'not_found' => ['code'=>1307,'http_status'=>404,'message'=>['en'=>'Event not found','fr'=>'Événement non trouvé'],'type'=>'error'],
    ],
  ],
];