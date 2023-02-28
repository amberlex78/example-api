<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ApiFilter
{
    protected array $safeFields = [];

    protected array $columnMap = [];

    protected array $operatorMap = [];

    /**
     * @param Request $request
     * @return array|string|null
     */
    public function transform(Request $request): array|string|null
    {
        $eloQuery = [];

        foreach ($this->safeFields as $field => $operators) {
            $query = $request->query($field);

            if (!isset($query)) {
                continue;
            }

            $column = $this->columnMap[$field] ?? $field;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}
