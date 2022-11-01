<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\ShowRequest;
use App\Http\Resources\Company\ShowResource;
use App\Models\Company;

class ShowController extends Controller
{

    public function __construct(private Company $company)
    {
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ShowRequest $request)
    {
        $company = $this->company->find(request()->id);
        return new ShowResource($company);
    }
}
