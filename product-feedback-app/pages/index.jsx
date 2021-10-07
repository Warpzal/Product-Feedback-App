import NavigationMobile from '../components/Navigation/NavigationMobile.jsx'
import RoadMap from '../components/RoadMap/RoadMap.jsx'
import Tags from '../components/Tags/Tags.jsx'
import TheHeader from '../components/TheHeader/TheHeader.jsx'
import TopBar from '../components/TopBar/TopBar.jsx'
import Suggestion from '../components/Suggestion/Suggestion.jsx'

function Home() {
	return (
		<div>
			<div className="container">
				<NavigationMobile />
				<TopBar />
				<TheHeader />
				<div className="Tags">
					<Tags />
				</div>
				<div className="Roadmap">
					<RoadMap />
				</div>
				<div className="Suggestion">
					<Suggestion
						title={'Title'}
						description={'Description'}
						tags={['test', 'test2']}
						likes={12}
						comments={2}
					/>
				</div>
			</div>
		</div>
	)
}

export default Home
