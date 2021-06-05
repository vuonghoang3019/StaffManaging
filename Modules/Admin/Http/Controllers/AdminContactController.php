<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminContactController extends FrontendController
{
    private $contact;
    public function __construct(Contact $contact)
    {
        parent::__construct();
        $this->contact = $contact;
    }

    public function index()
    {
        $contactsView = $this->contact->paginate(5);
        return view('admin::contact.index',compact('contactsView'));
    }

    public function action($id)
    {
        $contactAction = $this->contact->findOrFail($id);
        $contactAction->status = $contactAction->status === 0 ? 1 : 0;
        $contactAction->save();
        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công');
    }

    public function detail($id)
    {
        $contactDetail = $this->contact->findOrFail($id);
        $contactDetail->status = 1;
        $contactDetail->save();
        return view('admin::contact.view',compact('contactDetail'));
    }
}
