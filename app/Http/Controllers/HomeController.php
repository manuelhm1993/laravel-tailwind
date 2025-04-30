<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        // Devuelve todos los archivos de un directorio
        $images = Storage::files('img');

        // Contenido de prueba
        $content = [
            'bg-red-200' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pretium bibendum tempor. Praesent consectetur molestie ligula at faucibus. Duis id nisi at felis ultrices malesuada sit amet quis nisi. In placerat accumsan turpis. Cras commodo est ante, sed viverra libero porttitor eu. Sed a velit ut enim lacinia gravida. Donec convallis sapien a ipsum egestas, a volutpat ex viverra. Praesent et leo odio. Donec ut tristique nisl, et hendrerit sem. Aliquam efficitur tempus ligula at suscipit. Aliquam sed augue ligula. Morbi ac purus in arcu commodo maximus nec eget purus. Praesent in eros leo. Aenean a lacinia nulla, quis vulputate lorem. Maecenas velit turpis, imperdiet nec urna sit amet, volutpat mattis nunc.',
            'bg-blue-200' => 'Etiam vitae gravida massa. Fusce nisl massa, vulputate quis dolor a, accumsan tristique enim. In pulvinar ligula maximus, posuere libero a, dignissim erat. Donec non volutpat nisl. Maecenas tincidunt, velit vel egestas tempor, nisi arcu semper ex, placerat suscipit neque enim non nibh. Aliquam rutrum, tellus vitae placerat blandit, lorem augue egestas quam, vel fermentum nisl neque a tortor. Duis sodales eros et ligula dapibus sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur feugiat, velit ut efficitur maximus, quam elit rhoncus lorem, id euismod leo metus non tellus.',
            'bg-green-200' => 'Quisque vitae commodo lectus. Ut egestas vulputate justo non lobortis. Phasellus porta erat sed lacus elementum aliquam. Mauris dignissim dolor ut accumsan mollis. Nullam id lacinia purus, in commodo magna. Fusce pharetra nunc vitae semper semper. Sed turpis arcu, maximus ac tincidunt vel, elementum vel enim. Morbi dignissim fringilla est, eu luctus arcu. Praesent posuere, ex a interdum faucibus, quam lacus venenatis odio, vel euismod justo metus mattis nulla.',
            'bg-indigo-200' => 'Nullam finibus velit quis nulla facilisis placerat. Aenean at orci consequat, volutpat leo nec, hendrerit leo. Maecenas efficitur consequat turpis, at porttitor neque interdum et. Nullam auctor finibus lectus quis laoreet. Suspendisse condimentum id tellus vel egestas. Cras finibus volutpat dui sed porttitor. Praesent in mattis eros, vel congue augue. Proin justo lorem, vulputate eu ex at, efficitur consequat nibh. Quisque tempor nibh nunc, ac vulputate lectus aliquam eu.',
            'bg-yellow-200' => 'Nulla facilisi. Sed sed mauris tempor, congue erat sit amet, rutrum nunc. Pellentesque congue nibh a nisi ornare mattis. Vestibulum ex massa, elementum in maximus et, sodales vel ligula. Morbi in tincidunt ex. Ut vitae porttitor arcu, vel egestas nunc. Ut ut semper lectus. Duis eget dictum quam, eu dignissim mauris.'
        ];
        
        return view('welcome', compact('images', 'content'));
    }
}
