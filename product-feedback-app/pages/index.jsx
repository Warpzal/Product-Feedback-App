import NavigationMobile from '../components/Navigation/NavigationMobile.jsx'
import RoadMap from '../components/RoadMap/RoadMap.jsx'
import Tags from '../components/Tags/Tags.jsx'
import TheHeader from '../components/TheHeader/TheHeader.jsx'

function Home() {
	return (
		<div>
			<NavigationMobile />
			<div className="container">
				<TheHeader />
				<Tags />
				<RoadMap />
			</div>
		</div>
	)
}

export default Home
