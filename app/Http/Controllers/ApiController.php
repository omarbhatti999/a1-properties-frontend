<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\TestTable;

class ApiController extends Controller
{
    public function getAll()
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/home');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function areasList()
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/areas');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function areasListFeatured()
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/areas/featured');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function developersList()
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/developers');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }

    public function developmentsList()
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/developments');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function developmentsListFeatured()
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/featured-developments');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }

    public function propertiesListings(Request $request)
    {
        try {
            $response = Http::withOptions([
                'query' => $request->all(),
                // Pass request parameters to the other endpoint
            ])
                ->get(env('APP_BACKEND_URL') . '/listings');
            ;
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function getProperty($slug)
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/listings/' . $slug);
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function propertiesListCommercial()
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/properties/commercial');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }

    public function getDevelopment($slug)
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/development/' . $slug);
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function getArea($slug)
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/area/' . $slug);
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function getPropertiesByParams(Request $request)
    {
        try {

            $response = Http::get(env('APP_BACKEND_URL') . '/properties/' . $request->params);
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function getTeam(Request $request, $params)
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/team/all/' . $params);
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    public function getTeamMemberData($slug)
    {
        try {
            $response = Http::get(env('APP_BACKEND_URL') . '/team/' . $slug);
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }
    }
    //Lead Forms Integrations
    public function leadRequest(Request $request)
    {
        try {
            $clientIp = request()->getClientIp(null, true);
            $requestData = $request->all();
            $requestData['client_ip'] = $clientIp;

            $response = Http::post(env('APP_BACKEND_URL') . '/lead-request', $requestData);
            return $response;

        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return $this->failureResponse('Something went wrong');
        }

    }

    //Code for PROPSPACE Integration
    public function sendRequest(Request $request)
    {
        $request = $request->all();
        $data = TestTable::create(['data' => json_encode($request)]);
        $fullName = $request['full_name'];

        $email = $request['email'] ?? '';
        $countryCode = $request['country_tel_no-cf7it-country-code'] ?? ''; //971
        $countryShortCode = $request['country_tel_no-cf7it-country-iso2'] ?? ''; // ae
        $countryName = $request['country_tel_no-cf7it-country-name'] ?? ''; //United Arab Emirates
        $phoneNo = $request['country_tel_no-cf7it-national'];
        $fullPhoneNo = $countryCode . $phoneNo;
        $leadSource = $request['utm_source'] ?? ''; //Google
        $campaignName = $request['utm_campaign'] ?? ''; //General_EN
        $mediumSource = $request['utm_medium'] ?? ''; //Search
        $searchingFor = $request['searching_for'] ?? '';
        $ip = $request['ip'] ?? '';
        $pageUrl = $request['full_page_url'] ?? '';
        $ipCountryName = $request['ip_country_name'] ?? '';
        $ipCity = $request['ip_city'] ?? '';

        //propspace api to send from landing pages only
        $response = Http::post('https://crm.propspace.com/import_entities/leads/', [
            'country_code' => $countryShortCode,
            'key' => 'bLb3vnvtFDNgLGzF1dtaAe21ncuYsth7',
            'api_version' => '2.0',
            'data' => [
                'name' => $fullName,
                'mobile' => $fullPhoneNo,
                'email' => $email,
                'enquiry' => " - <br> Campaign: " . $campaignName . "<br>Inquiry: " . $searchingFor . "<br>Country: " . $countryName . "<br>Medium Source: " . $mediumSource . "<br>IP: " . $ip . "<br>IP Location: " . $ipCountryName . "<br>IP City: " . $ipCity . "<br>Page URL: " . $pageUrl,
                'lead_source' => $leadSource,
                'requirements' => [
                    [
                        'unit_type' => $campaignName,
                    ]
                ],

            ],
        ]);
        $responseData = json_decode($response, true);
        //   Check the response

        if ($responseData['success'] == 'true') {
            $data->status = 'true';
            $data->lead_id = $responseData['leads_id'];
            $data->save();
        } else {
            $data->status = 'false';
            $data->message = $responseData['error_details']['message'];
            $data->save();
        }

        return json_encode("api submitted");
    }

    public function metaRequest(Request $request)
    {
        $request = $request->all();
        $data = TestTable::create(['data' => json_encode($request)]);

        $campaignName = $request['campaign'] ?? '';
        $fullName = $request['fullName'] ?? '';
        $email = $request['email'] ?? '';
        $mobileNo = $request['mobileNo'] ?? '';
        $whatsappNo = $request['whatsapp'] ?? '';
        $country = $request['country'] ?? '';

        $searchingFor = $request['searchingFor'] ?? '';
        $source = $request['source'] ?? '';
        $leadSource = '';
        if ($source == 'ig') {
            $leadSource = 'Instagram';
        } else if ($source == 'fb') {
            $leadSource = 'Facebook';
        }
        //propspace api to send from meta for fb and instagram
        $response = Http::post('https://crm.propspace.com/import_entities/leads/', [
            'country_code' => '',
            'key' => 'bLb3vnvtFDNgLGzF1dtaAe21ncuYsth7',
            'api_version' => '2.0',
            'data' => [
                'name' => $fullName,
                'mobile' => '',
                'email' => $email,
                'enquiry' => " - <br> Campaign: " . $campaignName . "<br>Mobile No: " . $mobileNo . "<br>Whatsapp No: " . $whatsappNo . "<br>Country: " . $country . "<br>Searching For: " . $searchingFor,
                'lead_source' => $leadSource,
                'requirements' => [
                    [
                        'unit_type' => $campaignName,
                    ]
                ],

            ],
        ]);

        $responseData = json_decode($response, true);
        //   Check the response

        if ($responseData['success'] == 'true') {
            $data->status = 'true';
            $data->save();
        } else {
            $data->status = 'false';
            $data->message = $responseData['error_details']['message'];
            $data->save();
        }

        return json_encode("api submitted");
    }

    public function blogs(Request $request)
    {
        try {
            $response = Http::get('https://old.a1properties.ae/all-blogs');
            return $response;

        } catch (\Exception $exception) {
            return $this->failureResponse('Something went wrong');
        }

    }

    public function featuredBlogs(Request $request)
    {
        try {
            $response = Http::get('https://old.a1properties.ae/featured-blogs');
            // dd($response);
            return $response;

        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return $this->failureResponse('Something went wrong');
        }

    }
    public function getBlogBySlug($slug)
    {
        try {
            $response = Http::get('https://old.a1properties.ae/blog/'.$slug);
            return $response;

        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return $this->failureResponse('Something went wrong');
        }

    }


}

