<h2>Your Kundli</h2>
<p><strong>Name:</strong> {{ $kundli['name'] }}</p>
<p><strong>Gender:</strong> {{ $kundli['gender'] }}</p>
<p><strong>Date of Birth:</strong> {{ $kundli['dob'] }}</p>
<p><strong>Time of Birth:</strong> {{ $kundli['tob'] }}</p>
<p><strong>Place:</strong> {{ $kundli['place'] }}</p>

@if(isset($kundli['predictions']) && is_array($kundli['predictions']))
    <p><strong>Prediction:</strong></p>
    <ul>
        @foreach ($kundli['predictions'] as $prediction)
            <li>{{ $prediction }}</li>
        @endforeach
    </ul>
@endif

@if(isset($kundli['chart_image_base64']))
    <div style="margin: 20px 0;">
        <h3>Kundli Chart</h3>
        <img src="data:image/png;base64,{{ $kundli['chart_image_base64'] }}" alt="Kundli Chart">
    </div>
@endif
