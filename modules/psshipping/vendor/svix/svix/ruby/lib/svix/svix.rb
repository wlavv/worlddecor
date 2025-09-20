# frozen_string_literal: true

module Svix
    class SvixOptions
        attr_accessor :debug
        attr_accessor :server_url

        def initialize(debug = false, server_url = nil)
            @debug=debug
            @server_url=server_url
        end
    end

    class Client
        attr_accessor :application
        attr_accessor :authentication
        attr_accessor :endpoint
        attr_accessor :event_type
        attr_accessor :integration
        attr_accessor :message
        attr_accessor :message_attempt

        def initialize(auth_token, options = SvixOptions.new)

            region = auth_token.split(".").last
            if region == "us"
                regional_url = "https://api.us.svix.com"
            elsif region == "eu"
                regional_url = "https://api.eu.svix.com"
            elsif region == "in"
                regional_url = "https://api.in.svix.com"
            else
                regional_url = "https://api.svix.com"
            end

            uri = URI(options.server_url || regional_url)

            configuration = Configuration.new
            configuration.debugging = options.debug
            configuration.scheme = uri.scheme
            configuration.host = uri.port ? "#{uri.host}:#{uri.port}" : uri.host
            configuration.access_token = auth_token
            configuration.server_index = nil

            api_client = ApiClient.new(configuration)
            api_client.user_agent = "svix-libs/#{VERSION}/ruby"

            @application = ApplicationAPI.new(api_client)
            @authentication = AuthenticationAPI.new(api_client)
            @endpoint = EndpointAPI.new(api_client)
            @event_type = EventTypeAPI.new(api_client)
            @integration = IntegrationAPI.new(api_client)
            @message = MessageAPI.new(api_client)
            @message_attempt = MessageAttemptAPI.new(api_client)
        end
    end
end
