<div>
    <div id="map" style="height: 500px;"></div>

    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet/dist/leaflet.css"
    />

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([-3.319437, 114.590752], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        @foreach(\App\Models\Pendaftaran::whereNotNull('latitude')->whereNotNull('longitude')->get() as $p)
            L.marker([{{ $p->latitude }}, {{ $p->longitude }}])
                .addTo(map)
                .bindPopup(
                    "<b>{{ $p->nama_lengkap }}</b><br>" +
                    "Agama: {{ $p->agama }}"
                );
        @endforeach
    </script>
</div>
