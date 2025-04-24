## Tables ##
Book , Author , Comments , Users 

## Analysis Project ##

## Book Table : 
Has columns : imgpath , id  ,  name  , categories  ,  price  ,  quantity .

## Author Table : 
Has columns : id  ,  name  , book_id  .

## Comment Table : 
Has columns : id  ,  content  , book_id  , .

--------------------------------------------------------------
**Book Table** represent details books and it related with **Author Table**
using "(one_to_one) relation" .

**Author Table** should has a (unique forigne_key book_id column) .

**Comments Table** should has a (forigne_key book_id column) which is a referance for **Book Table** using "(one_to_many) relation" .

--------------------------------------------------------------
##### Note : see the photo under this file .#####
#### type in terminal : php artisan migrate:fresh --seed  (to seed sum data) ##### library
# library
# library
