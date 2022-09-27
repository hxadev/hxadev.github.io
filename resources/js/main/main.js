import { SessionManager } from "../Session/SessionManager";

import { PrincipalManager } from "../PrincipalPage/PrincipalManager";

/**
 * @author hxa.dev
 */

const session = SessionManager().newInstance();
const page = PrincipalManager();

/**
 * INIT THE SCRIPTS OF THE PAGE
 */
page.init();
