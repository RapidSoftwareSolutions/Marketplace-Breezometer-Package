[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Trello/functions?utm_source=RapidAPIGitHub_TrelloFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Breezometer Package
World leading air pollution API. Top features: AQI map, forecast, pollen, air quality data.
* Domain: [breezometer.com](https://breezometer.com)
* Credentials: apiKey

## How to get credentials: 
1. Sign up in [breezometer.com](https://breezometer.com)
2. Navigate to Developers->Api login
3. Add a new Api Key
 
## Breezometer.getAirQuality
You can get air quality data by Latitude and Longitude (Geocoding)

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your BreezoMeter API key.
| latitude | String     | Geographic coordinate that specifies the north-south position of a point on the Earth’s surface. Range between -90 to 90
| longitude| String     | Geographic coordinate that specifies the east-west position of a point on the Earth’s surface. Range between -180 to 180
| fields   | String     | Set of fields separated by commas
| lang     | String     | Response language. Support English(“en”) and Hebrew(“he”).

## Breezometer.getSpecificDateAirQuality
You can get air quality data by Latitude and Longitude (Geocoding)

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your BreezoMeter API key.
| latitude | String     | Geographic coordinate that specifies the north-south position of a point on the Earth’s surface. Range between -90 to 90
| longitude| String     | Geographic coordinate that specifies the east-west position of a point on the Earth’s surface. Range between -180 to 180
| datetime | String     | The specific time you wish to get air quality data for. Date and time format: YYYY-MM-DDTHH:mm:SS
| lang     | String     | Response language. Support English(“en”) and Hebrew(“he”).

## Breezometer.getAirQualityHistoryForDateRange
You can get history air quality data for a range of dates in a specific location (Latitude and Longitude) with a start and end timestamps that will provide an array of results.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your BreezoMeter API key.
| latitude      | String     | Geographic coordinate that specifies the north-south position of a point on the Earth’s surface. Range between -90 to 90
| longitude     | String     | Geographic coordinate that specifies the east-west position of a point on the Earth’s surface. Range between -180 to 180
| start_datetime| String     | The specific start time you wish to get air quality data for. Date and time format: YYYY-MM-DDTHH:mm:SS
| end_datetime  | String     | The specific end time you wish to get air quality data for. Date and time format: YYYY-MM-DDTHH:mm:SS
| interval      | Number     | A time interval represents a period of time (hours) between two BAQI objects. You can choose an interval value (Integer) between 1-24 hours.
| lang          | String     | Response language. Support English(“en”) and Hebrew(“he”).

## Breezometer.getAirQualityForecast
###### (not available in trial version)
You can get air quality data forecasts for a specific location for the next 24 hours

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your BreezoMeter API key.
| latitude | String     | Geographic coordinate that specifies the north-south position of a point on the Earth’s surface. Range between -90 to 90
| longitude| String     | Geographic coordinate that specifies the east-west position of a point on the Earth’s surface. Range between -180 to 180
| hours    | Number     | Hours represents the period of time for the Forecast data you’ll receive.You can choose any value (integer) up to 96 hours. The default period: 24 hours 
| lang     | String     | Response language. Support English(“en”) and Hebrew(“he”).
