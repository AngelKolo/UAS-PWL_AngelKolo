<?php namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class MemberController extends Controller
{
    public function index()
    {
        $model = new MemberModel();
        $data['members'] = $model->findAll();

        return view('member_list', $data);
    }

    public function create()
    {
        return view('member_create');
    }

    public function store()
    {
        $model = new MemberModel();
        $model->insert([
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
        ]);
        return redirect()->to('/members');
    }

    public function edit($id)
    {
        $model = new MemberModel();
        $data['member'] = $model->find($id);
        return view('member_edit', $data);
    }

    public function update($id)
    {
        $model = new MemberModel();
        $model->update($id, [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
        ]);
        return redirect()->to('/members');
    }

    public function delete($id)
    {
        $model = new MemberModel();
        $model->delete($id);
        return redirect()->to('/members');
    }
}
