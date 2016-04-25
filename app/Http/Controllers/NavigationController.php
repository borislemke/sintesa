<?php

namespace App\Http\Controllers;

use App\Nav;
use Illuminate\Http\Request;

use App\Http\Requests;

class NavigationController extends Controller
{
    //
    public function indexRange(Request $request)
    {
        $nav = Nav::where('parent', 0)->get();
        $row_count = $nav->count();

        $start = ($request->start - 1) * $request->offset;
        $nav = $nav->slice($start, $request->offset);

        return response()->json([
            'data' => $nav,
            'start' => $start + 1,
            'sortDir' => $request->sortDir,
            'last' => $start + count($nav),
            'length' => $row_count
        ]);
    }

    public function build($id)
    {
        $nav = Nav::find($id);

        $nav->children = $nav->children()->get();

        foreach ($nav->children as $child) {
            $child->children = $child->children()->get();

            foreach ($child->children as $grand) {
                $grand->children = $grand->children()->get();
            }
        }

        return $nav;
    }

    public function get($id)
    {
        $nav = $this->build($id);

        return response()->json($nav);
    }

    public function update(Request $request)
    {
        $this->destroyChildren($request->id);

        $nav = Nav::find($request->id);

        $nav->group = $request->group;
        $nav->hide = $request->hide;
        $nav->no_link = $request->no_link;
        $nav->open_in_new = $request->open_in_new;
        $nav->order = $request->order;
        $nav->parent = $request->parent;
        $nav->title = $request->title;
        $nav->tooltip = $request->tooltip;
        $nav->url = $request->url;
        $nav->url_type = $request->url_type;

        $nav->save();

        $saved = [];

        foreach ($request['children'] as $cKey => $child) {
            $nChild = new Nav;

            $nChild->parent = $nav->id;
            $nChild->group = $child['group'];
            $nChild->hide = $child['hide'];
            $nChild->no_link = $child['no_link'];
            $nChild->open_in_new = $child['open_in_new'];
            $nChild->order = $child['order'];
            $nChild->title = $child['title'];
            $nChild->tooltip = $child['tooltip'];
            $nChild->url = $child['url'];
            $nChild->url_type = $child['url_type'];

            $nChild->save();

            foreach ($child['children'] as $gKey => $grand) {
                $nGrand = new Nav;

                $nGrand->parent = $nChild->id;
                $nGrand->group = $grand['group'];
                $nGrand->hide = $grand['hide'];
                $nGrand->no_link = $grand['no_link'];
                $nGrand->open_in_new = $grand['open_in_new'];
                $nGrand->order = $grand['order'];
                $nGrand->title = $grand['title'];
                $nGrand->tooltip = $grand['tooltip'];
                $nGrand->url = $grand['url'];
                $nGrand->url_type = $grand['url_type'];

                $nGrand->save();

                foreach ($grand['children'] as $gGKey => $gGrand) {
                    $nGGrand = new Nav;

                    $nGGrand->parent = $nGrand->id;
                    $nGGrand->group = $gGrand['group'];
                    $nGGrand->hide = $gGrand['hide'];
                    $nGGrand->no_link = $gGrand['no_link'];
                    $nGGrand->open_in_new = $gGrand['open_in_new'];
                    $nGGrand->order = $gGrand['order'];
                    $nGGrand->title = $gGrand['title'];
                    $nGGrand->tooltip = $gGrand['tooltip'];
                    $nGGrand->url = $gGrand['url'];
                    $nGGrand->url_type = $gGrand['url_type'];
                    $nGGrand->save();
                }
            }
        }

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Navigation updated',
                'message' => "Navigation and it's children updated"
            ],
            'save' => $saved
        ]);
    }

    public function destroy($id)
    {
        $nav = Nav::find($id);

        $nav->children = $nav->children()->get();

        foreach ($nav->children as $child) {
            $child->children = $child->children()->get();

            foreach ($child->children as $grand) {
                $grand->children = $grand->children()->get();

                foreach ($grand->children as $grand_grand) {
                    $grand_grand->delete();
                }
                $grand->delete();
            }
            $child->delete();
        }
        $nav->delete();

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Navigation deleted',
                'message' => "Navigation and sub navigation deleted"
            ]
        ]);
    }

    public function destroyChildren($id)
    {
        $nav = Nav::find($id);

        $nav->children = $nav->children()->get();

        foreach ($nav->children as $child) {
            $child->children = $child->children()->get();

            foreach ($child->children as $grand) {
                $grand->children = $grand->children()->get();

                foreach ($grand->children as $grand_grand) {
                    $grand_grand->delete();
                }
                $grand->delete();
            }
            $child->delete();
        }

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Navigation deleted',
                'message' => "Navigation and sub navigation deleted"
            ]
        ]);
    }
}
