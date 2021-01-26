<?php
require_once 'vendor/autoload.php';

use Google\Cloud\Core\ServiceBuilder;
use Google\Cloud\Firestore\FirestoreClient;

class Firestore{
     protected $db;
     protected $name;

     public function __construct(string $collection)
     {
         $this->db = new FirestoreClient([
            'projectId' => 'apptraining-4e270'
         ]);
 
         $this->name = $collection;
     }

     
     public function getDocument(string $name)
     {
         try {
             if (empty($name)) throw new Exception('Document name missing');
             if ($this->db->collection($this->name)->document($name)->snapshot()->exists()) {
                 return $this->db->collection($this->name)->document($name)->snapshot()->data();
             } else {
                 throw new Exception('Document are not exists');
             }
         } catch (Exception $exception) {
             return $exception->getMessage();
         }
     }
    
     public function getWhere(string $field, string $operator, $value)
     {
         $arr = [];
         $query = $this->db->collection($this->name)->where($field, $operator, $value)->documents()->rows();
         if (!empty($query)) {
             foreach ($query as $value) {
                 $arr[] = $value->data();
             }
         }
         return $arr;
     }

     public function newDocument(string $name, array $data = [])
     {
         try {
             $this->db->collection($this->name)->document($name)->create($data);
             return true;
         } catch (Exception $exception){
             return $exception->getMessage();
         }
     }


    public function completeDataUserDocument(string $name, array $data = [])
    {

        $path = "/xxx/firebase_auth.json";
        $config = array(
            "projectId" => "test",
            "keyFile" => json_decode(file_get_contents($path), true)
        );
        $firestore = new FirestoreClient($config);
        $collection = $firestore->collection('clients');
        $trips = $collection->add([
            'organization_id' => '3'
        ]);

// this line throws an error when /employees is appended to path
        $document = $firestore->document('clients/'.$trips->id().'/employees');

// this block works when '/employees' is removed from document path
// but it places the data in the document, not the '/employees' subcollection
        $firestore->runTransaction(function (FirestoreTransaction $transaction) use ($document) {
            $transaction->create($document, [
                ['path' => 'roles', 'value' => array(
                    "IT Manager" => "John",
                    "Sales Manger" => "Jane",
                    "Customer Service Manager" => "Jack",
                    "Accounting Manager" => "Jill",
                    "Managers" => 4
                )
                ],
                ['path' => 'office_location', 'value' => array(
                    "latitude" => 40.7406375,
                    "longitude" => -74.0107935
                )
                ],
                ['path' => 'country', 'value' => 'USA'],
            ]);
        });





//        try {
//            $this->db->collection($this->name.'/'+$name)->document("Suer")->create($data);
//            return true;
//        } catch (Exception $exception){
//            return $exception->getMessage();
//        }
    }
 
     public function newCollection(string $name, string $doc_name, array $data = [])
     {
         try {
             $this->db->collection($name)->document($doc_name)->create($data);
             return true;
         } catch (Exception $exception) {
             return $exception->getMessage();
         }
     }

    /**
     * Drop exists document in collection
     * @param string $name
     * @return void
     */
    public function dropDocument(string $name)
    {
        $this->db->collection($this->name)->document($name)->delete();
    }

    public function dropCollection(string $name){
        $documents = $this->db->collection($name)->limit(1)->documents();
        while(!$documents->isEmpty()){
            foreach($documents as $item){
                $item->reference()->delete();
            }
        }
    }

 }


?>