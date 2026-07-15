<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UserProfiles Controller
 *
 * @property \App\Model\Table\UserProfilesTable $UserProfiles
 */
 
class UserProfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->UserProfiles->find()
            ->contain(['Users']);
        $userProfiles = $this->paginate($query);
        $this->set(compact('userProfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userProfile = $this->UserProfiles->get($id, contain: ['Users']);
        $this->set(compact('userProfile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userProfile = $this->UserProfiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $userProfile = $this->UserProfiles->patchEntity($userProfile, $this->request->getData());
            if ($this->UserProfiles->save($userProfile)) {
                $this->Flash->success(__('The user profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user profile could not be saved. Please, try again.'));
        }
        $users = $this->UserProfiles->Users->find('list', limit: 200)->all();
        $this->set(compact('userProfile', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function edit($uuid)
    {
        $userProfile = $this->UserProfiles->findByUuid($uuid)->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data =  $this->request->getData();
              // 1. CORRECTION: Récupérer 'name'
            $name = $this->request->getData('name');
            
            // 2. NOUVELLE VARIABLE: Récupérer 'phone'
            $phone = $this->request->getData('phone');

           $allowedFileTypes = [
                'image/jpeg',
                'image/png',
                'image/jpg'
            ];
            
            $file = $this->request->getUploadedFiles();
        
            if (isset($file['logo']) && $file['logo']->getSize() > 0) { // Ajout de la vérification de la taille
                $uploadedFile = $file['logo'];
                $fileType = $uploadedFile->getClientMediaType();
                
                // Ajouter ici une vérification du type de fichier
                if (in_array($fileType, $allowedFileTypes)) {
                    $filename = $uploadedFile->getClientFilename();
                    // Utiliser une meilleure gestion des noms de fichiers (ex: uniqid()) est recommandé !
                    $destination = $_SERVER['DOCUMENT_ROOT'] . '/img/' . $filename;
                    
                    if (!is_dir(dirname($destination))) {
                        mkdir(dirname($destination), 0755, true);
                    }
                    $uploadedFile->moveTo($destination);
                    $userProfile->avatar = $filename;
                    // Le message de succès est mal placé ici, il doit être après la sauvegarde.
                } else {
                    $this->Flash->error(__('Type de fichier non autorisé.')); // Changé en error pour plus de clarté
                }
            }
        
           $userProfile->company_name =  $this->request->getData('company_name');
           $userProfile->company = $name;
           $userProfile->name = $name;
           $userProfile->phone = $phone;
        //    debug($userProfile);die();
            if ($this->UserProfiles->save($userProfile)) {
                $this->Flash->success(__('Profile mis à jour.'));
                return $this->redirect(['action' => 'edit',$uuid]);
            }
            $this->Flash->error(__('Impossible de mettre à jour votre profile.'));
        }
        $users = $this->UserProfiles->Users->find('list', limit: 200)->all();
        $this->set(compact('userProfile', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userProfile = $this->UserProfiles->get($id);
        if ($this->UserProfiles->delete($userProfile)) {
            $this->Flash->success(__('The user profile has been deleted.'));
        } else {
            $this->Flash->error(__('The user profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
