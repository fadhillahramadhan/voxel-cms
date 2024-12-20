<?php


namespace App\Libraries;

class Telegram
{
    private $bugsCenter;
    private $senderToken;

    public function __construct(string $bugsCenter = '', string $senderToken = '')
    {
        $this->bugsCenter  = $bugsCenter;
        $this->senderToken = $senderToken;
    }

    /**
     * Fungsi Kirim pesan ke Telegram
     *
     * @param string $message
     */
    public function send(string $message)
    {
        // curl 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $this->senderToken . '/sendMessage?chat_id=' . $this->bugsCenter);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'text'       => $message,
            'parse_mode' => 'markdown',
        ]);


        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);

        return $server_output;
    }
}
