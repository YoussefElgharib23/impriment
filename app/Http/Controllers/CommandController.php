<?php

namespace App\Http\Controllers;

use App\Models\Command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function index()
    {
        $commands = Command::latest()->with('client:id,name,phone', 'product:id,name,image,price')->get();

        return view('commands.index', compact('commands'));
    }

    public function accept(Command $command)
    {
        $command->update([
            'is_accepted' => true,
        ]);

        return redirect()->route('commands.index');
    }

    public function destroy(Command $command)
    {
        $command->delete();
        return redirect()->route('commands.index');
    }
}
