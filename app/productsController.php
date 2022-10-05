<?php
session_start();

    if(isset($_POST['name'])){
        $productController = new ProductsController();
        $productController->setProducts($_POST['name'],$_POST['slug'],$_POST['description'],$_POST['features'],$_POST['brand_id'],$_POST['cover'],);
        header("Location: ../products?success");
    }
    class ProductsController {
        public function getProducts() {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            // echo $response;
            $response = json_decode($response);
            if (isset($response->code) && $response->code>0) {
                return $response->data;
            }else{
                return array();
            }

        }
        public function setProducts($name, $slug, $description, $features, $brand_id, $cover){

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name ,'slug' => $slug,'description' => $description,'brand_id' => $brand_id,'cover'=> $cover),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;
            }
        }
?>