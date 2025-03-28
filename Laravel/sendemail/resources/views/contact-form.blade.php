<html>

<head>
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .contact-form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .contact-form h2 {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            margin: -20px -20px 20px -20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="contact-form">
            <h2 class="text-center">Contact</h2>
            <form action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if (session('success'))
                    <div class="alert alert-success m-2" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger m-2" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject"
                        value="{{ old('subject') }}">
                    @error('subject')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="3" placeholder="Message">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Attach File</label>
                    <input name="attachment" class="form-control" type="file" id="file">
                    @error('attachment')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</body>

</html>
