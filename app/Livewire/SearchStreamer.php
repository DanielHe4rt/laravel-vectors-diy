<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class SearchStreamer extends Component
{

    public string $search = '';

    public function render(): View
    {
        $response = [];

        if (!empty($this->search)) {
            $response = [
                [
                    'payload' => [
                        "broadcaster_type" => "partner",
                        "created_at" => "2018-05-29T21:14:02Z",
                        "description" => "Coding useless stuff since 2011. Hey! I'm danielhe4rt, 24yo that likes to create content and weird projects with PHP and Laravel. Founded one of the most notorious Tech Communities in Brazil a.k.a 'He4rt Developers' and now working as Developer Advocate at ScyllaDB.",
                        "display_name" => "danielhe4rt",
                        "game_id" => "1469308723",
                        "game_name" => "Software and Game Development",
                        "id" => "42239087081",
                        "is_mature" => false,
                        "language" => "pt",
                        "login" => "danielhe4rt",
                        "offline_image_url" => "https://static-cdn.jtvnw.net/jtv_user_pictures/a1888fdc-4895-4673-9317-748991b3097c-channel_offline_image-1920x1080.png",
                        "profile_image_url" => "https://static-cdn.jtvnw.net/jtv_user_pictures/f5c84939-a415-4654-b5da-60ff968280e6-profile_image-300x300.png",
                        "started_at" => "2024-01-21T14:52:53Z",
                        "tag_ids" => [
                        ],
                        "tags" => [
                            "PHP",
                            "Laravel",
                            "Development",
                            "Javascript",
                            "DevRel",
                            "Database",
                            "ScyllaDB",
                            "C",
                            "Português",
                            "English"
                        ],
                        "thumbnail_url" => "https://static-cdn.jtvnw.net/previews-ttv/live_user_danielhe4rt-{width}x{height}.jpg",
                        "title" => "[EN/PT-BR] IA's going to rule the world - @scylladb",
                        "type" => "live",
                        "user_id" => "227168488",
                        "user_login" => "danielhe4rt",
                        "user_name" => "danielhe4rt",
                        "view_count" => 0,
                        "viewer_count" => 36
                    ]
                ]
            ];
        }

        return view('livewire.search-streamer', [
            'streamers' => $response
        ]);
    }
}
