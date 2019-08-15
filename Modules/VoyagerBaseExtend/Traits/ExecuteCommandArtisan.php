<?php

namespace Modules\VoyagerBaseExtend\Traits;

use Artisan;

trait ExecuteCommandArtisan
{
    protected function getArtisanCommands()
    {
        Artisan::call('list');

        // Get the output from the previous command
        $artisan_output = Artisan::output();
        $artisan_output = $this->cleanArtisanOutput($artisan_output);
        $commands = $this->getCommandsFromOutput($artisan_output);

        return $commands;
    }

    protected function getArtisanCommandsChoice($choice)
    {
        Artisan::call('list');

        // Get the output from the previous command
        $artisan_output = Artisan::output();
        $artisan_output = $this->cleanArtisanOutput($artisan_output);
        $commands = $this->getCommandsFromOutputChoice($artisan_output, $choice);

        return $commands;
    }

    protected function cleanArtisanOutput($output)
    {

        // Add each new line to an array item and strip out any empty items
        $output = array_filter(explode("\n", $output));

        // Get the current index of: "Available commands:"
        $index = array_search('Available commands:', $output);

        // Remove all commands that precede "Available commands:", and remove that
        // Element itself -1 for offset zero and -1 for the previous index (equals -2)
        $output = array_slice($output, $index - 2, count($output));

        return $output;
    }

    protected function getCommandsFromOutput($output)
    {
        $commands = [];

        foreach ($output as $output_line) {
            if (empty(trim(substr($output_line, 0, 2)))) {
                $parts = preg_split('/  +/', trim($output_line));
            
                if(true == $this->compass_choice_commands) {
                    if(in_array($parts[0], $this->compass_commands))
                    {
                        $command = (object) ['name' => trim(@$parts[0]), 'description' => trim(@$parts[1])];
                        array_push($commands, $command);
                    }
                } else {
                    $command = (object) ['name' => trim(@$parts[0]), 'description' => trim(@$parts[1])];
                    array_push($commands, $command);
                }
            }
        }

        return $commands;
    }

    private function getCommandsFromOutputChoice($output, $choice)
    {
        $commands = [];

        foreach ($output as $output_line) {
            if (empty(trim(substr($output_line, 0, 2)))) {
                $parts = preg_split('/  +/', trim($output_line));
            
                if(in_array($parts[0], $choice)) {
                    $command = (object) ['name' => trim(@$parts[0]), 'description' => trim(@$parts[1])];
                    array_push($commands, $command);
                }
            }
        }

        return $commands;
    }
}