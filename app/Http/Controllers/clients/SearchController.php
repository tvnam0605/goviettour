<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\clients\Tours;
use Illuminate\Support\Facades\Http;
class SearchController extends Controller
{
    private $tours;

    public function __construct()
    {
        $this->tours = new Tours();
    }
    public function index(Request $request)
    {
        $title = 'Tìm kiếm';
    
        $destinationMap = [
            'dn' => 'Đà Nẵng',
            'cd' => 'Côn Đảo',
            'hn' => 'Hà Nội',
            'hcm' => 'TP. Hồ Chí Minh',
            'hl' => 'Hạ Long',
            'nb' => 'Ninh Bình',
            'pq' => 'Phú Quốc',
            'dl' => 'Đà Lạt',
            'qt' => 'Quảng Trị',
            'kh' => 'Khánh Hòa',
            'ct' => 'Cần Thơ',
            'vt' => 'Vũng Tàu',
            'qn' => 'Quảng Ninh',
            'la' => 'Lào Cai',
            'bd' => 'Bình Định',
        ];
    
        $destination = $request->input('destination');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
    
        // Kiểm tra và chuyển đổi định dạng ngày tháng
        try {
            $formattedStartDate = $startDate ? Carbon::createFromFormat('d/m/Y', $startDate)->format('Y-m-d') : null;
            $formattedEndDate = $endDate ? Carbon::createFromFormat('d/m/Y', $endDate)->format('Y-m-d') : null;
        } catch (\Exception $e) {
            $formattedStartDate = null;
            $formattedEndDate = null;
        }
    
        // Chuyển đổi giá trị sang tên chi tiết nếu có trong mảng
        $destinationName = $destinationMap[$destination] ?? null;
    
        $dataSearch = [
            'destination' => $destinationName,
            'startDate' => $formattedStartDate,
            'endDate' => $formattedEndDate,
        ];
    
        $tours = $this->tours->searchTours($dataSearch) ?? [];
    
        return view('clients.search', compact('title', 'tours'));
    }
    
    public function searchTours(Request $request)
    {
        $title = 'Tìm kiếm';
        $keyword = $request->input('keyword');
    
        try {
            $apiUrl = 'http://127.0.0.1:5555/api/search-tours';
            $response = Http::get($apiUrl, ['keyword' => $keyword]);
    
            if ($response->successful()) {
                $resultTours = $response->json('related_tours');
                if (!is_array($resultTours)) {
                    $resultTours = [];
                }
            } else {
                $resultTours = [];
            }
        } catch (\Exception $e) {
            \Log::error('Lỗi khi gọi API liên quan: ' . $e->getMessage());
            $resultTours = [];
        }
    
        if (!empty($resultTours)) {
            $tours = $this->tours->toursSearch($resultTours);
        } else {
            $dataSearch = ['keyword' => $keyword];
            $tours = $this->tours->searchTours($dataSearch) ?? [];
        }
    
        return view('clients.search', compact('title', 'tours'));
    }
    


}
